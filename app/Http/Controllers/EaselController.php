<?php

namespace App\Http\Controllers;

use App\Models\easel;
use App\traits\ImagesTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class EaselController extends Controller
{
    use ImagesTrait;

    public function index()
    {
        $easels = easel::all();
        return view('admin.easel.index', [
            'easels' => $easels
        ]);
    }

    public function getEasel()
    {
        $easel = easel::all();
        return view('easel.index', [
            'easel' => $easel
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'size' => 'required|string|max:255',
                'material' => 'required|string|max:255',
                'images' => 'required',
                'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            ]);
        } catch (ValidationException $e) {
            Log::error('Validation failed', $e->errors());
            return redirect()->back()->withErrors($e->errors())->withInput();
        }

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('easels', 'public');
                $imagePaths[] = $path;
            }
        }

        Easel::create([
            'name' => $validated['name'],
            'size' => $validated['size'],
            'material' => $validated['material'],
            'images' => json_encode($imagePaths),
        ]);

        return redirect()->back()->with('success', 'Molbert muvaffaqiyatli qo‘shildi!');
    }

    public function edit($id)
    {
        $easel = $this->getEaselTrait($id);
        return view('admin.easel.edit', [
            'easel' => $easel
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $easel = $this->getEaselTrait($id);

        $existingImages = $request->input('existing_images', []); // default bo‘sh array

        $newImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('easels', 'public');
                $newImages[] = $path;
            }
        }

        $allImages = array_merge($existingImages, $newImages);

        $easel->update([
            'name' => $validated['name'],
            'size' => $validated['size'],
            'material' => $validated['material'],
            'images' => $allImages,
        ]);

        return redirect()->route('easel')->with('success', 'Мольберт успешно обновлен!');
    }

    public function destroy($id)
    {
        $easel = $this->getEaselTrait($id);

        if (is_array($easel->images)) {
            foreach ($easel->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        $easel->delete();
        return redirect()->route('easel')->with('success', 'Мольберт ва расмлари ўчирилди!');
    }
}

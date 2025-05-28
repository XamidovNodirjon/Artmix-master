<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Work;
use App\traits\ImagesTrait;
use Illuminate\Http\Request;


class ArtistController extends Controller
{
    use ImagesTrait;

    public function index()
    {
        $artists = Artist::with('works')->get();
        return view('admin.artist.index', [
            'artists' => $artists
        ]);
    }

    public function store(Request $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->save();

        $works = new Work();
        $works->image_name = $request->image_name;
        $works->size = $request->size;
        $works->materials = $request->materials;
        $works->artist_id = $artist->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('works', 'public');
            $works->images = $path;
        }

        $works->save();

        return redirect()->back()->with('success', 'Qo‘shildi!');
    }

    public function addWork(Request $request, $id)
    {
        $works = new Work();
        $works->image_name = $request->image_name;
        $works->size = $request->size;
        $works->materials = $request->materials;
        $works->artist_id = $id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('works', 'public');
            $works->images = $path;
        }

        $works->save();

        return redirect()->back()->with('success', 'Qo‘shildi!');

    }

    public function edit($id)
    {
        $artists = $this->getArtist($id);
        return view('admin.artist.edit', [
            'artists' => $artists
        ]);
    }

    public function show($id)
    {
        $artist = Artist::with('works')->findOrFail($id);
        return view('artist.show', [
            'artist' => $artist
        ]);
    }

    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);

        if ($request->has('name')) {
            $artist->name = $request->name;
        }
        if ($request->has('description')) {
            $artist->description = $request->description;
        }
        $artist->save();

        $deletedWorks = json_decode($request->input('deleted_works', '[]'), true);
        if (!empty($deletedWorks)) {
            Work::whereIn('id', $deletedWorks)->delete();
        }

        $works = $request->input('works', []);

        foreach ($works as $workId => $workData) {
            if (strpos($workId, 'new-') === 0) {
                // Yangi asar yaratish
                $newWork = new Work();
                $newWork->artist_id = $artist->id;
                $newWork->size = $workData['size'] ?? null;
                $newWork->materials = $workData['materials'] ?? null;
                $newWork->image_name = $workData['image_name'] ?? null;

                $fileInputName = "works.$workId.new_image";
                if ($request->hasFile($fileInputName)) {
                    $file = $request->file($fileInputName);
                    $path = $file->store('works', 'public');
                    $newWork->images = $path;
                }
                $newWork->save();
            } else {
                $work = Work::where('id', $workId)->where('artist_id', $artist->id)->first();
                if ($work) {
                    $work->size = $workData['size'] ?? $work->size;
                    $work->materials = $workData['materials'] ?? $work->materials;
                    $work->image_name = $workData['image_name'] ?? $work->image_name;

                    $fileInputName = "works.$workId.new_image";
                    if ($request->hasFile($fileInputName)) {
                        $file = $request->file($fileInputName);
                        $path = $file->store('works', 'public');
                        $work->images = $path;
                    }
                    $work->save();
                }
            }
        }
        return redirect()->back()->with('success', 'Maʼlumot yangilandi!');
    }


    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);

        foreach ($artist->works as $work) {
            if ($work->images && \Storage::disk('public')->exists($work->images)) {
                \Storage::disk('public')->delete($work->images);
            }
            $work->delete();
        }

        $artist->delete();

        return redirect()->back()->with('success', 'O‘chirildi!');
    }

}

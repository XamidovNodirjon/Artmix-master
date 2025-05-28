<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index');
    }

    public function Baget()
    {
        return view('service.Baget');
    }

    public function Print()
    {
        return view('service.Print');
    }

    public function Gallery()
    {
        $artists = Artist::with('works')->get();
        return view('service.Gallery', [
            'artists' => $artists
        ]);
    }

    public function Market()
    {
        return view('service.Market1');
    }


}

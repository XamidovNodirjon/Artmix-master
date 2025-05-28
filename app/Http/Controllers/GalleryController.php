<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function historyGenre()
    {
        return view('service.gallery.history-genre');
    }

    public function architecturalGenre()
    {
        return view('service.gallery.architectural-genre');
    }

    public function landscapeGenre()
    {
        return view('service.gallery.landscape-genre');
    }

    public function naturmortGenre()
    {
        return view('service.gallery.naturmort-genre');
    }

    public function batalGenre()
    {
        return view('service.gallery.batal-genre');
    }

    public function animalisticGenre()
    {
        return view('service.gallery.animalistic-genre');
    }

    public function graphicsGenre()
    {
        return view('service.gallery.graphics-genre');
    }

    public function contemporaryGenre()
    {
        return view('service.gallery.contemporary-genre');
    }

    public function portraitGenre()
    {
        return view('service.gallery.portrait-genre');
    }

    public function abstractionGenre()
    {
        return view('service.gallery.abstraction-genre');
    }
}

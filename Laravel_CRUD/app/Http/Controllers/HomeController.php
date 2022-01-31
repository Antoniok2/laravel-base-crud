<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class HomeController extends Controller
{
    public function home() {

        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }

    public function show($id) {

        $comic = Comic::FindOrFail($id);

        return view('pages.detail', compact('comic'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' =>  'required|string|max:255',
            'release_date' => 'required|date',
            'count' => 'required|Numeric'
        ]);

        $comic = Comic::create($data);

        return redirect() -> route('home');

    }
}

<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function show(Genre $genre)
    {
        return $genre;
    }

    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

    public
    function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());
        return response()->json($genre, 201);
    }

    public
    function delete(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return 204;
    }
}

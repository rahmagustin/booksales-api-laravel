<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Validator;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $genre = Genre::create($request->only('name', 'description'));
        return response()->json($genre, 201);
    }
}

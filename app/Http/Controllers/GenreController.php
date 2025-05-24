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

    public function show(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource Not Found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $genre
        ]);
    }

    public function update(Request $request, string $id) {
        $genre = Genre::find($id);
    
        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource Not Found"
            ], 404);
        }
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $genre->update($validatedData);
    
        return response()->json([
            "success" => true,
            "data" => $genre
        ], 200);
    }

    public function destroy(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource Not Found"
            ], 404);
        }

        $genre->delete();
    }
}

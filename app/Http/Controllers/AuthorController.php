<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);
        $author = Author::create($request->only('name', 'bio'));
        return response()->json($author, 201);
    }

    public function show(string $id) {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Resource Not Found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $author
        ]);
    }
    public function update(Request $request, string $id) {
        $author = Author::find($id);
    
        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Resource Not Found"
            ], 404);
        }
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);
    
        $author->update($validatedData);
    
        return response()->json([
            "success" => true,
            "data" => $author
        ], 200);
    }

    public function destroy(string $id) {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Resource Not Found"
            ], 404);
        }

        $author->delete();
    }

}

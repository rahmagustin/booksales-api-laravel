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
}

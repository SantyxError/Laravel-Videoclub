<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class DirectorController extends Controller
{

    public function __construct()
    {
        $this->middleware(
            'auth:sanctum',
            ['except' => ['index', 'show']]
        );
    }

    public function index()
    {
        $director = Pelicula::get();
        return response()->json($director, 200);
    }


    public function store(Request $request)
    {
        $director = new Director();
        $director->name = $request->name;

        $director->save();
        return response()->json($director, 201);
    }


    public function show(Director $director)
    {
        return response()->json($director, 200);
    }


    public function update(Request $request, Director $director)
    {
        $director = new Director();
        $director->name = $request->name;

        $director->save();
        return response()->json($director, 203);
    }


    public function destroy(Director $director)
    {
        $director->delete();
        return response()->json(null, 204);
    }
}

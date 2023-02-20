<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
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
        $actor = Actor::get();
        return response()->json($actor, 200);
    }


    public function store(Request $request)
    {
        $actor = new Actor();
        $actor->name = $request->name;

        $actor->save();
        return response()->json($actor, 201);
    }


    public function show(Actor $actor)
    {
        return response()->json($actor, 200);
    }


    public function update(Request $request, Actor $actor)
    {
        $actor = new Actor();
        $actor->name = $request->name;

        $actor->save();
        return response()->json($actor, 203);
    }


    public function destroy(Actor $actor)
    {
        $actor->delete();
        return response()->json(null, 204);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeliculaRequest;
use App\Models\Director;
use App\Models\Pelicula;
use Illuminate\Http\Request;

use Ciri\dto\MovieDto;
use Ciri\service\impl\MovieServiceImpl;
use Ciri\service\MovieService;
use Illuminate\Http\JsonResponse;

class PeliculaController extends Controller
{

    private MovieService $movieService; //Importante crear esto

    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => ['index', 'show']]);
        $this->movieService = new MovieServiceImpl();
    }

    // public function index()
    // {
    //     $pelicula = Pelicula::get();
    //     return response()->json($pelicula, 200);
    // }

    public function index()
    {

        $movies = $this->movieService->all();
        return response()->json($movies, 200);
    }


    // public function store(Request $request)
    // {
    //     $pelicula = new Pelicula();
    //     $pelicula->title = $request->title;
    //     $pelicula->year = $request->year;
    //     $pelicula->duration = $request->duration;

    //     $pelicula->save();
    //     return response()->json($pelicula, 201);
    // }


    public function store(PeliculaRequest $movieRequest)
    {
        $movieDto = new MovieDto(
            null,
            $movieRequest->title,
            $movieRequest->year,
            $movieRequest->duration,
            $movieRequest->director_id
        );
        return response()->json($this->movieService->save($movieDto), 201);
    }


    // public function show(Pelicula $pelicula)
    // {
    //     return response()->json($pelicula, 200);
    // }

    public function show(int $id)
    {
        $movie = $this->movieService->findById($id);
        return response()->json($movie, 200);
    }



    // public function update(Request $request, Pelicula $pelicula)
    // {
    //     $pelicula = new Pelicula();
    //     $pelicula->title = $request->title;
    //     $pelicula->director = $request->director;
    //     $pelicula->anyo = $request->anyo;
    //     $pelicula->genero = $request->genero;

    //     $pelicula->save();
    //     return response()->json($pelicula, 201);
    // }

    public function update(Request $request, $id): JsonResponse
    {
        $pelicula = new MovieDto(
            null,
            $request->title,
            $request->year,
            $request->duration,
            $request->director_id
        );

        return response()->json($this->movieService->update($pelicula, $id), 200);
    }


    // public function destroy(Pelicula $pelicula)
    // {
    //     $pelicula->delete();
    //     return response()->json(null, 204);
    // }

    public function destroy($id): JsonResponse
    {
        $pelicula = Pelicula::destroy($id);
        echo "Pelicula Borrada con exito";
        return response()->json($pelicula, 200);
    }
}

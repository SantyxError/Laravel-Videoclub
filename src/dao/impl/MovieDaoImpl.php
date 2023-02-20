<?php

namespace Ciri\dao\impl;

use App\Models\Director;
use App\Models\Pelicula;
use Ciri\dao\MovieDao;
use Ciri\dto\MovieDto;

class MovieDaoImpl implements MovieDao
{


    public function all()
    {
        $movies = Pelicula::all();
        $movieDto = array();
        foreach ($movies as $movie) {
            $movieDto[] = new MovieDto(
                $movie->id,
                $movie->title,
                $movie->year,
                $movie->duration,
                $movie->director_id
            );
        }
        return $movieDto;
    }


    public function findById(int $id)
    {
        $movie = Pelicula::findOrFail($id);
        $movieDto = new MovieDto(
            $movie->id,
            $movie->title,
            $movie->year,
            $movie->duration,
            $movie->director_id
        );
        return $movieDto;
    }

    public function save(MovieDto $movieDto): bool
    {
        $movie = new Pelicula();
        $movie->title = $movieDto->getTitle();
        $movie->year = $movieDto->getYear();
        $movie->duration = $movieDto->getDuration();
        $movie->director()->associate(Director::findOrFail($movieDto->getDirector_id()));
        return $movie->save();
    }

    public function update(MovieDto $pelicula, $id): MovieDto
    {
        $movie = Pelicula::findOrFail($id);
        $movie->title = $pelicula->getTitle();
        $movie->year = $pelicula->getYear();
        $movie->duration = $pelicula->getDuration();
        $movie->save();
        return new MovieDto($movie->id, $movie->title, $movie->year, $movie->duration, $movie->director_id);
    }

    public function delete($id): bool
    {
        return 0;
    }
}

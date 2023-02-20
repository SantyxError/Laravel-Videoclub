<?php

namespace Ciri\service;

use Ciri\dto\MovieDto;

interface MovieService
{

    public function all(); //Devuelve todas las peliculas

    public function findById(int $id); //Devuelve una pelicula por ID

    public function save(MovieDto $movieDto): bool; //Crea una nueva pelicula. le pasamos un movieDTO

    public function update(MovieDto $request, $id): MovieDto; //Actualiza una pelicula, le pasamos un movieDTO y una ID

    public function delete($id): bool; //Elimina una pelicula por ID
}

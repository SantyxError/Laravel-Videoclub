<?php

namespace Ciri\dao;

use Ciri\dto\MovieDto;

interface MovieDao
{


    //Interfaz donde irá la lógica de la aplicación
    public function all(); //GET

    public function findById(int $id); //GET by ID

    public function save(MovieDto $movieDto): bool;  //POST

    public function update(MovieDto $request, $id): MovieDto; //UPDATE

    public function delete($id): bool; //DELETE
}

<?php

namespace Ciri\service\impl;

use Ciri\dao\impl\MovieDaoImpl;
use Ciri\dao\MovieDao;
use Ciri\dto\MovieDto;
use Ciri\service\MovieService;

class MovieServiceImpl implements MovieService
{


    //Instanciamos un movieDAO
    private MovieDao $movieDao;


    //Creamos un consctructor donde creamos ese movieDAO
    public function __construct()
    {
        $this->movieDao = new MovieDaoImpl();
    }


    //Creamos los metodos que hereda de la interfaz del servicio. Estos llamarán al DAO:

    //GET
    public function all()
    {
        return $this->movieDao->all();
    }

    //GET por ID
    public function findById(int $id)
    {
        return $this->movieDao->findById($id);
    }

    //POST
    public function save(MovieDto $movieDto): bool
    {
        return $this->movieDao->save($movieDto);
    }

    //UPDATE
    public function update(MovieDto $pelicula, $id): MovieDto
    {
        return $this->movieDao->update($pelicula, $id);
    }

    // DELETE
    public function delete($id): bool
    {
        return 0;
    }
}

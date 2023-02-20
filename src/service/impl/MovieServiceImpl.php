<?php

namespace Ciri\service\impl;

use Ciri\dao\impl\MovieDaoImpl;
use Ciri\dao\MovieDao;
use Ciri\dto\MovieDto;
use Ciri\service\MovieService;

class MovieServiceImpl implements MovieService
{


    private MovieDao $movieDao;

    public function __construct()
    {
        $this->movieDao = new MovieDaoImpl();
    }


    public function all()
    {
        return $this->movieDao->all();
    }


    public function findById(int $id)
    {
        return $this->movieDao->findById($id);
    }

    public function save(MovieDto $movieDto): bool
    {
        return $this->movieDao->save($movieDto);
    }

    public function update(MovieDto $pelicula, $id): MovieDto
    {
        return $this->movieDao->update($pelicula, $id);
    }

    public function delete($id): bool
    {
        return 0;
    }
}

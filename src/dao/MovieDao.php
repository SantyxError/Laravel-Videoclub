<?php

namespace Ciri\dao;

use Ciri\dto\MovieDto;

interface MovieDao
{

    public function all();

    public function findById(int $id);

    public function save(MovieDto $movieDto): bool;

    public function update(MovieDto $request, $id): MovieDto;

    public function delete($id): bool;
}

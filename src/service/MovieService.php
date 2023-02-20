<?php

namespace Ciri\service;

use Ciri\dto\MovieDto;

interface MovieService
{

    public function all();

    public function findById(int $id);

    public function save(MovieDto $movieDto): bool;

    public function update(MovieDto $request, $id): MovieDto;

    public function delete($id): bool;
}

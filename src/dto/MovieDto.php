<?php

namespace Ciri\dto;

class MovieDto implements \JsonSerializable
{


    //PROPIEDADES
    private ?int $id;
    private string $title;
    private int $year;
    private int $duration;
    private int $director_id;


    //CONSTRUCTOR
    public function __construct(?int $id, string $title, int $year, int $duration, int $director_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->director_id = $director_id;
    }


    // METODOS PARA ACCEDER A LAS PROPIEDADES
    public function getId(): int
    {
        return $this->id;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    public function getYear(): int
    {
        return $this->year;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }


    public function getDirector_id(): int
    {
        return $this->director_id;
    }



    //METODO DEL JSONSERIALIZE

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'year' => $this->year,
            'duration' => $this->duration,
            'director_id' => $this->director_id
        ];
    }
}

<?php

namespace Ciri\dto;

class MovieDto implements \JsonSerializable
{

    private ?int $id;
    private string $title;
    private int $year;
    private int $duration;
    private int $director_id;


    public function __construct(?int $id, string $title, int $year, int $duration, int $director_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->director_id = $director_id;
    }

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

<?php

class Movie
{
    public $title;
    public $description;
    public $img;
    public $year;
    public $gen = [];

    function __construct(string $_title, string $_description, string $_img, int $_year, array $_gen)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->img = $_img;
        $this->year = $_year;
        $this->gen = $_gen;

    }


}

?>
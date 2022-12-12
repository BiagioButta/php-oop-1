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

    public function getTitle()
    {
        return $this->title;

    }
    public function getDescription()
    {
        return $this->description;

    }
    public function getImg()
    {
        return $this->img;

    }
    public function getYear()
    {
        return $this->year;

    }
    public function getGen()
    {
        return $this->gen;

    }
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }
    public function setGen($gen)
    {
        $this->gen = $gen;

        return $this;
    }


}

?>
<?php
class Place
{
    private $city;
    private $year;
    private $picture;


    function __construct($city, $year, $picture)
    {
        $this->city = $city;
        $this->year = $year;
        $this->picture = $picture;
    }

    function setCity($city_name)
    {
        $this->city = $city_name;
    }

    function getCity()
    {
        return $this->city;
    }

    function setYear($year)
    {
        $this->year = $year;
    }

    function getYear()
    {
        return $this->year;
    }

    function setPicture($picture)
    {
        $this->picture = $picture;
    }

    function getPicture()
    {
        return $this->picture;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }
}

?>

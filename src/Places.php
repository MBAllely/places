<?php
class Place
{
    private $city;
    

    function __constructor($city)
    {
        $this->city = $city;
    }

    function setCity($city_name)
    {
        $this->city = $city_name;
    }

    function getCity()
    {
        return $this->city;
    }
}

?>

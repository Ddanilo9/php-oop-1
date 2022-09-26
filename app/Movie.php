<?php

class Movie {
    public $name;
    public $country; 
    public $language;
    public $budget;
    public $RunningTime;

    function __construct($name, $country, $language, $budget, $RunningTime)
    {
        $this->name = $name;
        $this->country = $country;
        $this->language= $language;
        $this->budget= $budget;
        $this->RunningTime= $RunningTime;
    }
}
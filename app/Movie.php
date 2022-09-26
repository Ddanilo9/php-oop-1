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
        $this->setBudget($budget);
        $this->RunningTime= $RunningTime;
    }
    public function setBudget($budget)
 {
    if($budget < 0 || $budget == null) {
        $this->budget = 'unknow';
    } else {
        $this->budget = $budget;
    }
 }
}
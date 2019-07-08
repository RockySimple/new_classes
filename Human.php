<?php

class Human
{
    private $first_name, $last_name, $age;

    public function __construct($first_name,$last_name,$age)
    {
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->age=$age;
    }

    public function set_first_name($var){
        $this->first_name = $var;
    }

    public function set_last_name($var){
        $this->last_name = $var;
    }

    public function set_age($var){
        $this->first_name = $var;
    }

    public function get_first_name(){
        return $this->first_name;
    }

    public function get_last_name(){
        return $this->last_name;
    }

    public function get_age(){
        return $this->age;
    }

    public function __toString()
    {
        return "Human: " . $this->first_name . ' ' . $this->last_name;
    }
}

//$kek = new Human('Dan', 'Aga', 21);
//
//echo $kek;
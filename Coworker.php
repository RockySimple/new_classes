<?php

class Coworker extends Human
{
    private $salary;

    public function __construct($first_name, $second_name, $age, $salary)
    {
        parent::__construct($first_name, $second_name, $age);
        $this->salary=$salary;
    }

    public function receive_salary($date, $sum = 0)
    {
        if ($sum == 0){
            $sum = $this->salary;
        }
    }

}

new Coworker()
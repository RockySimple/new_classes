<?php

include_once  'Human.php';

class Student extends Human
{
    private $form, $course, $marks = [];

    public function __construct($first_name,$last_name,$age,$form,$course)
    {
        parent::__construct($first_name,$last_name,$age);
        $this->form = $form;
        $this->course = $course;
    }

    public function set_mark($subj, $mark){
        if(empty($this->marks[$subj])) {
            $this->marks[$subj] = [];
            array_push($this->marks[$subj], $mark);
        } else {
            array_push($this->marks[$subj], $mark);
        }
    }

    public function get_marks(){
        return $this->marks;
    }

    public function set_form($var){
        $this->form = $var;
    }

    public function set_course($var){
        $this->course = $var;
    }

    public function get_form($var){
        $this->form = $var;
    }

    public function get_course($var){
        $this->form = $var;
    }
}

$kek = new Student('Dan','Kek',20,'och',4);


$kek->get_marks();
<?php
class Session
{   
    public $id;
    public $title;
    public $doctor_id;
    public $date_start;
    public $max_patients;

    function __construct($title=null,$doctor_id=null,$date_start=null,$max_patients=null){

        $this->title=$title;
        $this->doctor_id=$doctor_id;
        $this->date_start=$date_start;
        $this->max_patients=$max_patients;
    }
}

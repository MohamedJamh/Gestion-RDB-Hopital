<?php
require_once('../includes/autoload.php');


function dateAfterWeek(){
    $date = date_create();
    date_add($date,date_interval_create_from_date_string("7 days"));
    return $date;
}
function sessionsPerWeek(){
    $sessions = Admin::readSession();
    $today = date("Y-m-d");
    $nextWeekDay = date_format(dateAfterWeek(),"Y-m-d");
    $weekSession = array();
    foreach ($sessions as $row) {
        if($today <= $row['date_start'] && $row['date_start'] <= $nextWeekDay){
            array_push($weekSession,$row);
        }
    }
    return $weekSession;
}
function appointmentPerWeek(){

    $appointments = $_SESSION['admin']->getAllAppointments();
    $today = date("Y-m-d");
    $nextWeekDay = date_format(dateAfterWeek(),"Y-m-d");
    $weekAppointment = array();
    foreach ($appointments as $row){
        if($today <= $row['Appointment Date'] && $row['Appointment Date'] <= $nextWeekDay){
            array_push($weekAppointment,$row);
        }
    }
    return $weekAppointment;
}
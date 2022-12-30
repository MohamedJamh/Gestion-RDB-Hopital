<?php
session_start();
require_once "../classes/Patient.php";
require_once "./authentification.controller.php";
if (isset($_POST["login"])) Authentification::login();

if (isset($_POST["save"])) {
    $me = new Patient(1, $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["password"], "patient", "2022-12-12");
    try {
        if($me->addPatient()){
            $_SESSION['patient'] = $me;
            header("Location: ../patient-interfaces/patient-home.php");
        }
    }catch (Exception $e){
        $_SESSION["error"] = "somethings was wrong";
        header("Location: ../SingUp.php");
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../index.php");
}
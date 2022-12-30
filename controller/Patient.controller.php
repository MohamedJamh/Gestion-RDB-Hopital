<?php
require_once('../includes/autoload.php');
//routing
if(isset($_GET['idsession']) && isset($_GET['date']) ) bookAppointment();
if(isset($_GET['idApp'])) cancelApp();

function myAppointments(){
    $p = new Patient(4,'karim','hamid','kara@kra','xxxxxxxxe','2020-12-11');
    $_SESSION['patient'] = $p;
    $myAppoint = $_SESSION['patient']->getMyAppointment();
    return $myAppoint;
}

function scheduledSessions(){
    $scheduledSessions = Admin::readSession();
    $availableScheduledSess = array();
    foreach($scheduledSessions as $row){
        if($row['max_patient'] != 0){
            array_push($availableScheduledSess,$row);
        }
    }
    return $availableScheduledSess;
}
function bookAppointment(){
    $p = new Patient(4,'karim','hamid','kara@kra','xxxxxxxxe','2020-12-11'); //   <- remove this after fixing authentification !
    $_SESSION['patient'] = $p;//   <- remove this after fixing authentification !
    $id_session = $_GET['idsession'];
    $date = $_GET['date'];
    $_SESSION['patient']->takeAppointment($id_session,$date);
    header('location: ../patient-interfaces/patient-scheduled-sessions.php');
}

function cancelApp(){
    $idApp = $_GET['idApp'];
    Admin::cancelAppointment($idApp);
    header("Location: ../patient-interfaces/patient-my-bookings.php");
}
<?php
require_once "../includes/autoload.php";

class Patient extends Person
{
    private string $date_of_birth;

    public function __construct($id, string $first_name, string $last_name, string $email, string $password, string $date_of_birth, string $role='patient')
    {
        $this->date_of_birth = $date_of_birth;
        parent::__construct($id, $first_name, $last_name, $email, hash("sha256", $password), $role);
    }


    public function getDateOfBirth(){
        return $this->date_of_birth;
    }
    public function setDateOfBirth($date_of_birth){
        $this->date_of_birth = $date_of_birth;
    }

    public function deleteProfilePatient():bool{
        try {
            $query = "SELECT id as `id_appointment`,id_session, date as 'date_appointment'  FROM `appointment` WHERE `id_patient` = $this->id";
            $result_appointments = Database::connect()->query($query)->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($result_appointments as $value) {
                if($value['date_appointment'] >= date("Y-m-d")){
                    $id_session = $value['id_session'];
                    Database::connect()->query("UPDATE Session SET `max_patient` = max_patient+1 WHERE `id` like $id_session");
                }
                $id_appointment = $value['id_appointment'];
                Database::connect()->query("DELETE from appointment where id like $id_appointment");
            }
            $id_patient = $this->id;
            $query1 = "DELETE  FROM `patient` WHERE `id` = $this->id";
            Database::connect()->query($query1);
            Database::disconnect();
            return true;
        } catch (Exception $e) {
            return false;
        }

    }
    public function takeAppointment($id_session , $start_session_date){

        $start_session_date = date_create($start_session_date);
        $booking_date = date_create();
        $appointment_date = '';


        if($booking_date < $start_session_date){
            $appointment_date = $start_session_date;
        }else{
            $appointment_date = $booking_date;
            date_add($appointment_date,date_interval_create_from_date_string("1 days"));
        }

        while (true) {
            $date = date_format($appointment_date,"Y-m-d");
            $count_query = "SELECT count(*) from appointment where id_session = $id_session and date = '$date'";
            $result_count_query = Database::connect()->query($count_query)->fetchAll(PDO::FETCH_ASSOC);

            $count_number =  $result_count_query[0]['count(*)'];
            echo $count_number;
            if($count_number < 4){
                $appointment_date = date_format($appointment_date,"Y-m-d");

                Database::connect()->query("INSERT INTO `appointment`(`order`, `date`, `booking_date`, `id_patient`, `id_session`) VALUES ($count_number+1,'$appointment_date',CURRENT_DATE(),$this->id,$id_session)");
                Database::connect()->query("UPDATE `session` SET `max_patient`= max_patient - 1 WHERE `id`= $id_session");
                break;
            }
            date_add($appointment_date,date_interval_create_from_date_string("1 days"));
        }


    }
    public function getOldAppointment():array{
        $conn = Database::connect();
        $old_appointments_result = $conn->query("SELECT * FROM Appointment where id_patient like $this->id and booking_date < CURRENT_DATE()")->fetchAll(PDO::FETCH_ASSOC);
        return $old_appointments_result;
    }

    public function editProfilePatient():bool{
        //please edite patient object with setters then call this methode ot update changes to database!
        try {
            $query = "UPDATE `patient` SET `first_name`='$this->first_name',`last_name`='$this->last_name',`email`='$this->email',`password`='$this->password',`date_of_birth`='$this->date_of_birth' WHERE `id` = $this->id";
            Database::connect()->query($query);
            Database::disconnect();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

$p = new Patient(4,'karim','hamid','kara@kra','xxxxxxxxe','2020-12-11');
$p->takeAppointment(3,'2022-12-10');




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
    function getAllDoctors(){
        $conn = Database::connect();     // :: ->  for static methods or properties
        $requete = "SELECT * FROM doctor";
        $res = $conn->query($requete);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllSessions(){
        $conn = Database::connect();     // :: ->  for static methods or properties
        $requete = "SELECT * FROM session";
        $res = $conn->query($requete);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    function addPatient(){
        $conn = Database::connect();     // :: ->  for static methods or properties
        $requete = "INSERT INTO patient ( `first_name`, `last_name`, `email`, `password`,`role`,`date_of_birth`) VALUES ( ?, ?, ?, ?, ?, ?) ";
        $sth = $conn->prepare($requete);
        return $sth->execute(array($this->first_name,$this->last_name,$this->email,$this->password, 'patient', $this->date_of_birth ));
    }

    public function getDateOfBirth(){
        return $this->date_of_birth;
    }
    public function setDateOfBirth($date_of_birth){
        $this->date_of_birth = $date_of_birth;
    }

    public function deleteProfilePatient():bool{
        // deletes patient profile but it makes sure to delete old and upcomming appointments 
        // 
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
        // this methode takes session id and its starting date it start generating your upcoming appointment date 
        // notice that max appointment per day is 4 appointments
        // basically it generates a potential appointment day then it counts how many already exists in the same day
        // if there is 4 it continues to next day etc...


        

        $count_query = "SELECT count(*) from appointment where id_session = $id_session and `id_patient` = $this->id";
        $count_result = Database::connect()->query($count_query)->fetchAll(PDO::FETCH_ASSOC);
        $count_book_session = $count_result[0]['count(*)'];
        
        //checking if he or she already booked in this session
        if($count_book_session == 0){

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
                if($count_number < 4){

                    $count_query = "SELECT count(*) from appointment where id_patient = $this->id and `date` = '$date'";
                    $count_result = Database::connect()->query($count_query)->fetchAll(PDO::FETCH_ASSOC);
                    $count_book_day = $count_result[0]['count(*)'];
                    
                    //checking if he or she already booked in this date
                    if($count_book_day == 0){
                        $time = "";
                        $count_number = $count_number+1;
                        switch($count_number){
                            case 1:
                                $time = "09:00 24H";
                                break;
                            case 2:
                                $time = "10:30 24H";
                                break;
                            case 3:
                                $time = "13:30 24H";
                                break;
                            case 4:
                                $time = "15:00 24H";
                                break;
                        }
                        $appointment_date = date_format($appointment_date,"Y-m-d");

                        Database::connect()->query("INSERT INTO `appointment`(`order`, `date`, `booking_date`, `id_patient`, `id_session` ,`time`) VALUES ($count_number,'$appointment_date',CURRENT_DATE(),$this->id,$id_session,'$time')");
                        Database::connect()->query("UPDATE `session` SET `max_patient`= max_patient - 1 WHERE `id`= $id_session");
                        break;
                    }
                }
                date_add($appointment_date,date_interval_create_from_date_string("1 days"));
            }
        }
    }
    public function getMyAppointment():array{
        $conn = Database::connect();
        $old_appointments_result = $conn->query("select concat(p.first_name ,' ', p.last_name) as 'Patient Name', app.order as 'Appointment Number' , concat(d.first_name ,' ', d.last_name) as 'Doctor' , s.title as 'Session Title' , s.date_start as 'Session date' , app.date 'Appointment Date' , app.time as 'Appointment Time' , app.booking_date as 'booking date' , app.id as 'id appointment'
        from patient as p, appointment as app, session as s , doctor d
        where p.id = app.id_patient 
        and app.id_session = s.id
        and s.id_doctor = d.id
        and p.id like $this->id
        and date >= CURRENT_DATE();")->fetchAll(PDO::FETCH_ASSOC);
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

    public static function getPatientById(int $id):array{
        return Database::connect()->query("SELECT * FROM Patient where id = $id")->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllAppointmentsRecorded(int $id):array{
        return Database::connect()->query("
                SELECT a.`order` as `order`, a.`date` as `date`, s.title as title, a.booking_date as booking_date
                FROM Appointment a 
                    inner join session s on a.id_session = s.id
                            where a.id_patient = $id
                ")->fetchAll(PDO::FETCH_ASSOC);
    }
}

// $p = new Patient(4,'karim','hamid','kara@kra','xxxxxxxxe','2020-12-11');
// $p->takeAppointment(5,'2022-12-15');




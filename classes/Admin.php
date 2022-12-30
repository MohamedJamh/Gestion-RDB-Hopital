<?php
require_once '../includes/autoload.php';

class Admin extends Person{

    public function __construct(?int $id, string $first_name, string $last_name, string $email, string $password, string $role='Admin')
    {
        $this->conn = Database::connect();
        parent::__construct($id, $first_name, $last_name, $email, hash("sha256", $password), $role);
    }

    public function addDoctor(Doctor $doc){
        $conn =  Database::connect();
        $speciality = $doc->getSpeciality();
        $query1= "INSERT INTO doctor (`first_name`, `last_name`, `email`, `password`, `role`, `speciality`) VALUES (?,?,?,?,?,? )";
        $sth = $conn->prepare($query1);
        $res = $sth->execute(array( $doc->first_name, $doc->last_name, $doc->email, $doc->password, 'doctor', $speciality ));
        return $res;
        
    }
    // public function editDoctor (Doctor $doc){
    //     $conn = Database::connect();
    //     $query= "UPDATE `doctor` SET `first_name` = ?, `last_name`=?, email = ?, `password` = ?, `speciality` = ? 
    //                              WHERE `id` = $doc->id";
    //     echo $query;
    //     $ud = $conn->prepare($query);
    //     $res = $ud->execute(array($$doc->first_name, $doc->last_name, $doc->email, $doc->password, $doc->speciality));
    //     Database::disconnect();
    //     $conn = null;
    //     return $res;
    // }
 
    static public function cancelAppointment($id_appointment):bool{
        //when we cancel an appointment we should update Session available places
        //the function returns false if something went wrong true otherwise
        $req = Database::connect()->query("SELECT id_session from appointment where id like $id_appointment");
        $result_id_session = $req->fetchAll(PDO::FETCH_ASSOC);
        if(isset($result_id_session[0]['id_session'])){
            $id_session = $result_id_session[0]['id_session'];
        }else{
            $id_session = null;
        }
        try{           
            Database::connect()->query("UPDATE Session SET `max_patient` = max_patient+1 WHERE `id` like $id_session");
            Database::connect()->query("DELETE from appointment where id like $id_appointment");
            Database::disconnect();

            return true;
        } catch (Exception $e) {
            Database::disconnect();
            return false;
        }
    }
    static public function  readSession($date=null,$doctor=null){ 
        $conn=Database::connect();
        if ($date==null&&$doctor==null){
            $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
                FROM `session` 
                INNER JOIN doctor on id_doctor=doctor.id";
        }
        else {
            if($date==null) 
            {
                $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
                FROM `session` 
                INNER JOIN doctor on session.id_doctor=doctor.id
                WHERE session.id_doctor=$doctor";
            }
            else{
                $sql="SELECT session.id,`title`, `date_start`, `max_patient`, `first_name`as `first_name_doctor`,`last_name`as `last_name_doctor` 
                FROM `session` 
                INNER JOIN doctor on session.id_doctor=doctor.id
                WHERE date_start='$date' ";
            }
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $result;
    }

    public function  createSession($MySession){
        try {
            $conn=Database::connect();
            $sql="INSERT INTO `session`( `title`, `date_start`, `max_patient`, `id_doctor`) VALUES (?,?,?,?)";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$MySession->title,$MySession->date_start,$MySession->max_patients,$MySession->doctor_id]);
            Database::disconnect();
        } catch (Exception $e) {
            die( 'Message: ' .$e->getMessage());
        }
    }

    public function  deleteSession($id){
        try {
        $conn=Database::connect();
        $sql="DELETE FROM `session` WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        Database::disconnect();
        } 
        catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    } 
    static public function getAllDoctors(){
        $conn = Database::connect();     // :: ->  for static methods or properties 
        $requete = "SELECT * FROM doctor
                    INNER JOIN speciality ON doctor.speciality = speciality.sid"; 
        $res = $conn->query($requete);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function deleteDoctor($id){
        try {
            $conn=Database::connect();
            $sql="DELETE FROM `doctor` WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            Database::disconnect();
            } 
            catch (Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
    }
    function getAllAppointment(){
        $conn = Database::connect();
        $requete = "select concat(p.first_name ,' ', p.last_name) as 'Patient Name', app.order as 'Appointment Number' , concat(d.first_name ,' ', d.last_name) as 'Doctor' , s.title as 'Session Title' , s.date_start as 'Session date' , app.date 'Appointment Date'
        from patient as p, appointment as app, session as s , doctor d
        where p.id = app.id_patient 
        and app.id_session = s.id
        and s.id_doctor = d.id"; 
        $res = $conn->query($requete);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllAppointments(){
        $conn = Database::connect();     // :: ->  for static methods or properties 
        $requete = "SELECT appointment.id, appointment.order, appointment.date, patient.first_name,patient.last_name ,session.title  FROM `appointment` 
                    INNER JOIN `patient` on patient.id= appointment.id_patient
                    INNER JOIN `session` on appointment.id_session = session.id"    ; 
        $res = $conn->query($requete); 
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
    // // *********test*********
    // $obj = new Admin (1,'admin', 'ADMIN', 'admin@gmail.com', '123', 'admin'); 
    
    
    
    // $doc = new Doctor (null,'tessst', 'doc', 'doc2@dddoctr.com', '123', 'doctor',3);
    // $obj->addDoctor($doc);

    // test 
    // $Admin = new Admin(null,'fn','ln','email','pass','admin');
    // $session = new Session(null,'title',null,date("Y-m-d"),10);
    // $Admin->createSession($session);
    // echo $Admin->cancelAppointment(37);

// test 
// $Admin = new Admin(null,'fn','ln','email','pass','admin');
// var_dump($Admin->getAllAppointments());
// $_SESSION['user'] = $Admin;
// $session = new Session(null,'title',null,date("Y-m-d"),10);
// $Admin->createSession($session);
// echo $Admin->cancelAppointment(37);
// var_dump(Admin::readSession());





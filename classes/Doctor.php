<?php
require_once "../includes/autoload.php";
class Doctor extends Person
{
    protected int $speciality;

    function __construct(?int $id, string $first_name, string $last_name, string $email, string $password, string $role, int $speciality)
    {
        $this->speciality = $speciality;
        parent::__construct($id, $first_name, $last_name, $email, $password, $role);
    }
    public function setSpeciality($speciality){
        $this->speciality = $speciality;;
    }

    public function getSpeciality(){
        return $this->speciality;
    }

   

    public function getAppointments(int $id):array{
        $conn = Database::connect();
        $res = $conn->query("SELECT * FROM Appointment WHERE id = $id");
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        $conn = null;
        return $res;
    }

    public function getSessionsByDoctor(int $id):array{
        $conn = Database::connect();
        $res = $conn->query("SELECT * FROM Session WHERE id_doctor = $id");
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        $conn = null;
        return $res;
    }

    public function getPatientsByDoctor(int $id):array{
        $conn = Database::connect();
        $res = $conn->query(
            "SELECT distinct p.* FROM Patient p 
                        inner join appointment a on p.id = a.id_patient
                        inner join session s on a.id_session = s.id
                    WHERE s.id_doctor = $id             
                ");
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        Database::disconnect();
        $conn = null;
        return $res;

    }

    public function deleteProfileDoctor(int $id):bool{
        $conn = Database::connect();
        $res = $conn->query("DELETE FROM Doctor WHERE id = $id");
        Database::disconnect();
        $conn = null;
        return $res;
    }

    public function editProfileDoctor(Doctor $doctor):bool{
        $conn = Database::connect();
        $query = "UPDATE `Doctor` SET `first_name` = ?, `last_name` = ?, `email` = ?,
                                        `password` = ?, `speciality` = ?
                                        where `id` = $doctor->id";
        echo $query;
        $sth = $conn->prepare($query);
        $res = $sth->execute(array($this->first_name, $this->last_name, $this->email, $this->password, $this->speciality));
        Database::disconnect();
        $conn = null;
        return $res;

    }
}

// $doc = new Doctor(2, 'khalid', 'fifel', 'khalid@gmail.com', '123', 'patient', 1);
// if($doc->editProfileDoctor($doc)) echo " done ";

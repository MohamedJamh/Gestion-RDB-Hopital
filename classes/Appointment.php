<?php

require_once "../includes/autoload.php";
class Appointment
{
    private mixed $id;
    private mixed $order;
    private mixed $date;
    private mixed $booking_date;
    private mixed $id_patient;
    private mixed $id_session;

    public function __construct( mixed $id, mixed $order, mixed $date, mixed $booking_date, mixed $id_patient, mixed $id_session)
    {
        $this->id = $id;
        $this->order = $order;
        $this->date = $date;
        $this->booking_date = $booking_date;
        $this->id_patient = $id_patient;
        $this->id_session = $id_session;
    }

    public function getId(): mixed
    {
        return $this->id;
    }
    public function setId(mixed $id): void
    {
        $this->id = $id;
    }


    public function getOrder(): mixed
    {
        return $this->order;
    }
    public function setOrder(mixed $order): void
    {
        $this->order = $order;
    }


    public function getDate(): mixed
    {
        return $this->date;
    }
    public function setDate(string $date): void
    {
        $this->date = $date;
    }


    public function getBookingDate(): mixed
    {
        return $this->booking_date;
    }
    public function setBookingDate(string $booking_date): void
    {
        $this->booking_date = $booking_date;
    }


    public function getIdPatient(): mixed
    {
        return $this->id_patient;
    }
    public function setIdPatient(string $id_patient): void
    {
        $this->id_patient = $id_patient;
    }


    public function getIdSession(): mixed
    {
        return $this->id_session;
    }
    public function setIdSession(string $id_session): void
    {
        $this->id_session = $id_session;
    }


    // public function createAppointment():bool{
    //     $conn = Database::connect();
    //     $stm = $conn->prepare("INSERT INTO Appointment (id, `order`, date, booking_date, id_patient, id_session) VALUES (?,?,?,?,?,?)");
    //     if($conn->query("UPDATE Session SET `max_patient` = max_patient-1 WHERE `id` = $this->id_session")){
    //         if( $stm->execute(array($this->id, $this->order, $this->date, $this->booking_date, $this->id_patient, $this->id_session))){
    //             return true;
    //         }else
    //             $conn->query("UPDATE Session SET `max_patient` = max_patient+1 WHERE `id` = $this->id_session");
    //     }
    //     return false;
    // }

    // public static function findAppointmentById(int $id):array{
    //     $conn = Database::connect();
    //     return $conn->query("SELECT * FROM Appointment WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    // }

    // public function updateAppointment():bool{
    //     $conn = Database::connect();
    //     $query = "UPDATE Appointment SET `order` = ?, `date` = ?, `booking_date` = ? , `id_patient` = ?, `id_session`= ?  WHERE id = $this->id";
    //     $thm = $conn->prepare($query);
    //     return $thm->execute(array($this->order, $this->date, $this->booking_date, $this->id_patient, $this->id_session));
    // }

    // public function deleteAppointment():bool{
    //     $conn = Database::connect();
    //     return $conn->query("DELETE FROM Appointment WHERE id = $this->id");
    // }
}
//test
/*
    $app = new Appointment(4, 2, "2000-02-22", date("Y-m-d"), 1, 1);
    $app->createAppointment();
    var_dump($app);
    echo "<hr>";
    $app->setDate("2222-02-22");
    $app->updateAppointment();
    var_dump($app);
*/

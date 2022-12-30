<?php
    include_once '../includes/autoload.php';


class Authentification
{

    public static function login()
    {

        $conn = Database::connect();
        $email = $_POST['user'];
        $password = $_POST['password'];
        $sql = "select *, count(*) as num from (
                         select d.id as id, d.role as role  from doctor  d where   d.email = :email AND d.password = :password 
                  UNION  select p.id as id, p.role as role  from Patient p where   p.email = :email AND p.password = :password
                  UNION  select a.id as id, a.role as role  from Admin   a where   a.email = :email AND a.password = :password       
                ) as user";
        $sth = $conn->prepare($sql);
        $sth->bindValue(':password', $password);
        $sth->bindValue(':email', $email);
        $sth->execute();
        $res = $sth->fetch(PDO::FETCH_ASSOC);
        if($res['num']){
            $query = "SELECT * FROM ".$res['role']." as u where u.id = ".$res['id'];
            $result = $conn->query($query)->fetch(PDO::FETCH_ASSOC);
            if ($result['role'] == "admin") {
                $_SESSION['admin']= new Admin($result['id'], $result['first_name'], $result['last_name'], $result['email'], $result['password'], $result['role']);
                $_SESSION['message'] = 'password or email are incorrect';

                header('Location: ../admin-interfaces/admin-dashboard.php'); // localiser vers dashboard admin
            } else if ($result['role'] == "patient") {
                $_SESSION['patient']= new Patient($result['id'], $result['first_name'], $result['last_name'], $result['email'], $result['password'], $result['role'], $result['date_of_birth']);
                
                $_SESSION['message'] = 'password or email are incorrect';
                header('Location: ../patient-interfaces/patient-home.php');// localiser vers dashboard patient
            } else if ($result['role'] == "doctor") {
                $_SESSION['doctor']= new Doctor($result['id'], $result['first_name'], $result['last_name'], $result['email'], $result['password'], $result['role'], $result['speciality']);

                $_SESSION['message'] = 'password or email are incorrect';
                header('Location: ../doctor-interfaces/doctor-dashboard.php'); // localiser vers dashboard doctor
            }
        } else {
            $_SESSION['message'] = 'password or email are incorrect';
            header('Location: ../SingIn.php');
        }
    }
}
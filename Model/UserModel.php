<?php
require_once '../DatabaseConnection/Connection.php';

class User{
    public function insertUser($first_name, $last_name){
        $connection = new Connection("localhost", "root", "", "pawfect");
        $conn = $connection->connect();

        $sql = "INSERT INTO users (first_name, last_name, email, contact_number, address, password, repeat_password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($conn, $sql)){
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $$address = $_POST['address'];
            $password = $_POST['password'];
            $rPassword = $_POST['rpassword'];

            mysqli_stmt_bind_param($stmt, "sssssss", $first_name, $last_name, $email, $contact, $address, $password, $rPassword);

            if(mysqli_stmt_execute($stmt)){
                header('location: add_employee.php');
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }
}
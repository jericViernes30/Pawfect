<?php
require_once '../DatabaseConnection/Connection.php';

class Dog{
    public function insertUser($first_name, $last_name, $email, $contact, $address, $password){
        $connection = new Connection("localhost", "root", "", "pawfect");
        $conn = $connection->connect();

        $sql = "INSERT INTO users (first_name, last_name, email, contact_number, address, password) VALUES (?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($conn, $sql)){

            mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $email, $contact, $address, $password);

            if(mysqli_stmt_execute($stmt)){
                header('location: ../signup.php');
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }

    public function fetchPets($owner) {
        $connection = new Connection("localhost", "root", "", "pawfect");
        $conn = $connection->connect();
    
        $sql = "SELECT * FROM dogs WHERE owner = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $owner); // Corrected parameter binding
        $stmt->execute();
        $result = $stmt->get_result();
    
        $pets = array(); // Initialize an array to store all pets
    
        while ($pet = $result->fetch_assoc()) {
            $pets[] = $pet; // Add each pet to the array
        }
    
        return $pets;
    }
    
}


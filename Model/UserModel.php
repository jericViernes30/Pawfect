<?php
require_once '../DatabaseConnection/Connection.php';

class User{
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

    public function login($email, $password){
        $connection = new Connection("localhost", "root", "", "pawfect");
        $conn = $connection->connect();

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User exists, fetch details
            $user = $result->fetch_assoc();
            // Verify password
            if ($user['password'] == $password) {
                header("Location: ../User/user_dashboard.php");
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }

        // Close connection
        $stmt->close();
        $conn->close();
    }
}
<?php
require_once '../Model/UserModel.php';

class UserController{
    private $first_name;
    private $last_name;
    private $email;
    private $contact_number;
    private $present_address;
    private $password;
    private $repeat_password;

    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = '';
        $this->contact_number = '';
        $this->present_address = '';
        $this->password = '';
        $this->repeat_password = '';
    }

    public function verifyFirstName($first_name){
        $this->first_name = $first_name;
        $name_pattern = '/^[a-zA-Z\s]+$/';

        if(preg_match($name_pattern, $first_name)){
            return $first_name;
        } else {
            return 'First name should only contain letters';
        }
    }

    public function verifyLastName($last_name){
        $this->last_name = $last_name;
        $name_pattern = '/^[a-zA-Z\s]+$/';

        if(preg_match($name_pattern, $last_name)){
            return $last_name;
        } else {
            return 'First name should only contain letters';
        }
    }
}

if($_SERVER['METHOD'] == 'POST'){
    if(isset($_POST['continue'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
    
        $user = new UserController($first_name, $last_name);
        $fname = $user->verifyFirstName($first_name);
        $lname = $user->verifyLastName($last_name);
        
        $UserModel = new User();
    
        $UserModel->insertUser($fname, $lname);
    
        header("Location: ../signup.php");
        exit();
    }
}


<?php
require_once '../Model/UserModel.php';

class UserController{
    private $first_name;
    private $last_name;
    private $email;
    private $contact_number;
    private $present_address;
    private $password;

    public function __construct($first_name = null, $last_name = null, $email = null, $contact_number = null, $present_address = null, $password = null) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->contact_number = $contact_number;
        $this->present_address = $present_address;
        $this->password = $password;
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

    public function verifyEmail($email){
        $this->email = $email;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return 'Please check your email';
        } else {
            return $email;
        }
    }

    public function verifyContactNumber($contact_number){
        $this->contact_number = $contact_number;
        $number_pattern = '/^\d{11}$/';

        if(preg_match($number_pattern, $contact_number)){
            return $contact_number;
        } else {
            return 'Contact number must only contain 11 digits only';
        }
    }

    public function verifyAddress($present_address){
        $this->present_address = $present_address;
        $address_pattern = '/^[a-zA-Z0-9\s.,#-]+$/u';

        if(preg_match($address_pattern, $present_address)){
            return $present_address;
        } else {
            return 'Please check your address';
        }
    }

    public function verifyPassword($password){
        $this->password = $password;
        $password_pattern = '/^[a-zA-Z0-9_-]+$/';

        if(preg_match($password_pattern, $password)){
            return $password;
        } else {
            return 'Check your password';
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['signup'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact'];
        $address = $_POST['address'];
        $password = $_POST['password'];
    
        $user = new UserController($first_name, $last_name, $email, $contact_number, $address, $password);
        $verifiedFirstName = $user->verifyFirstName($first_name);
        $verifiedLastName = $user->verifyLastName($last_name);
        $verifiedContactNumber = $user->verifyContactNumber($contact_number);
        $verifiedAddress = $user->verifyAddress($address);
        $verifiedPassword = $user->verifyPassword($password);
        $verifiedEmail = $user->verifyEmail($email);

        $UserModel = new User();
    
        $UserModel->insertUser($verifiedFirstName, $verifiedLastName, $verifiedEmail, $verifiedContactNumber, $verifiedAddress, $verifiedPassword);
        exit();
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new UserController($email, $password);
        $verifiedEmail = $user->verifyEmail($email);

        $userModel = new User();
        $userModel->login($verifiedEmail, $password);
    }
}


<?php

class UserController {
    public function registrationForm() {
        include 'registration_form.html';
    }

    public function registerUser() {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        echo "User registered successfully!";
    }
}

?>

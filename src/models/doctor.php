<?php

class Doctor {
    private $name;
    private $address;
    private $phone;
    private $email;
    private $speciality;
    private $CRM;
    private $username;
    private $password;

    function __construct(
        $_name,
        $_address,
        $_email,
        $_phone,
        $_speciality,
        $_CRM,
        $_username,
        $_password
    ){
        $this->name = $_name;
        $this->address = $_address;
        $this->email = $_email;
        $this->phone = $_phone;
        $this->speciality = $_speciality;
        $this->CRM = $_CRM;
        $this->username = $_username;
        $this->password = $_password;
    }

    function setName($_name) { $this->name = $_name; }
    function setAddress($_address) { $this->address = $_address; }
    function setPhone($_phone) { $this->phone = $_phone; }
    function setEmail($_email) { $this->email = $_email; }
    function setSpeciality($_speciality) { $this->speciality = $_speciality; }
    function setCRM($_CRM) { $this->CRM = $_CRM; }
    function setUsername($_username) { $this->username = $_username; }
    function setPassword($_password) { $this->password = $_password; }

    function getName($_name) { return $this->name; }
    function getAddress($_address) { return $this->address; }
    function getPhone($_phone) { return $this->phone; }
    function getEmail($_email) { return $this->email; }
    function getSpeciality($_speciality) { return $this->speciality; }
    function getCRM($_CRM) { return $this->CRM; }
    function getPassword($_password) { return $this->password; }
    function getUsername($_username) { return $this->username; }

    function showData() {
        echo "<br> ---- DOCTOR ---- <br>";
        echo "-> Name: " . $this->name . "<br>";
        echo "-> Address: " . $this->address . "<br>";
        echo "-> Phone: " . $this->phone . "<br>";
        echo "-> E-mail: " . $this->email . "<br>";
        echo "-> Speciality: " . $this->speciality . "<br>";
        echo "-> CRM: " . $this->CRM . "<br>";
        echo "-> Username: " . $this->username . "<br>";
        echo "-> Password: " . $this->password . "<br>";
    }
}

?>
<?php

class Doctor {
    private $name;
    private $address;
    private $phone;
    private $email;
    private $speciality;
    private $CRM;

    function __construct(
        $_name,
        $_address,
        $_email,
        $_phone,
        $_speciality,
        $_CRM
    ){
        $this->name = $_name;
        $this->address = $_address;
        $this->email = $_email;
        $this->phone = $_phone;
        $this->speciality = $_speciality;
        $this->CRM = $_CRM;
    }

    function setName($_name) { $this->name = $_name; }
    function setAddress($_address) { $this->address = $_address; }
    function setPhone($_phone) { $this->phone = $_phone; }
    function setEmail($_email) { $this->email = $_email; }
    function setSpeciality($_speciality) { $this->speciality = $_speciality; }
    function setCRM($_CRM) { $this->CRM = $_CRM; }

    function getName($_name) { return $this->name; }
    function getAddress($_address) { return $this->address; }
    function getPhone($_phone) { return $this->phone; }
    function getEmail($_email) { return $this->email; }
    function getSpeciality($_speciality) { return $this->speciality; }
    function getCRM($_CRM) { return $this->CRM; }

    function showData() {
        echo "<br> ---- DOCTOR ---- <br>";
        echo "-> Name: " . $this->name . "<br>";
        echo "-> Address: " . $this->address . "<br>";
        echo "-> Phone: " . $this->phone . "<br>";
        echo "-> E-mail: " . $this->email . "<br>";
        echo "-> Speciality: " . $this->speciality . "<br>";
        echo "-> CRM: " . $this->CRM . "<br>";
    }
}

?>
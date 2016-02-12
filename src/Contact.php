<?php
class Contact
{
    private $first_name;
    private $middle_name;
    private $last_name;
    private $phone;
    private $email;
    private $street;
    private $city;
    private $state;
    private $zip;

    function __construct($first_name, $middle_name, $last_name, $phone, $email, $street, $city, $state, $zip)
    {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    //** Setters **//
    function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    function setMiddleName($middle_name)
    {
        $this->middle_name = $middle_name;
    }

    function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setStreet($street)
    {
        $this->street = $street;
    }

    function setCity($city)
    {
        $this->$city = $city;
    }

    function setZip($zip)
    {
        $this->zip = $zip;
    }

    //** Getters **//
    function getFirstName()
    {
        return $this->first_name;
    }

    function getMiddleName()
    {
        return $this->middle_name;
    }

    function getLastName()
    {
        return $this->last_name;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getStreet()
    {
        return $this->street;
    }

    function getCity()
    {
        return $this->city;
    }

    function getState()
    {
        return $this->state;
    }

    function getZip()
    {
        return $this->zip;
    }

    //** Functions **//
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}

?>

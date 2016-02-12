<?php
class Contact
{
    private $first_name;
    private $middle_name;
    private $last_name;
    private $street;
    private $city;
    private $state;
    private $zip;

    function __construct($first_name, $middle_name, $last_name, $street, $city, $state, $zip)
    {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
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
        array_push('list_of_contacts', $this);
    }

    static function getAll()
    {
        return $SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}

?>

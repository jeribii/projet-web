<?php
class employe{
    private $lastname;
    private $firstname;
    private $password;
    private $phone;
    private $email;
    private $dOB;
    public function __construct($lastname,$firstname,$password,$phone,$email,$dOB)
    {
        $this->lastname=$lastname;
        $this->firstname = $firstname;
        $this->password = $password;
        $this->phone = $phone;
        $this->email = $email;
        $this->dOB = $dOB;
    }
    // Getters
    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDOB()
    {
        return $this->dOB;
    }

    // Setters
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setDOB($dOB)
    {
        $this->dOB = $dOB;
    }

}

?>
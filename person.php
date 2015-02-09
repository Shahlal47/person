<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 09/02/15
 * Time: 12:30
 */

class Person {

    private $firstName;
    private $middleName;
    private $lastName;


    public function setFirstName($firstName)
    {
        if(strlen($firstName) >= 2)
        {
            return $this->firstName = $firstName;
        }

    }

    public function setMiddleName($middleName)
    {
        if(strlen($middleName) >= 3)
        {
            return $this->middleName = $middleName;
        }

    }

    public function setLastName($lastName)
    {
        if(strlen($lastName) >=3)
        {
            return $this->lastName = $lastName;
        }

    }



    public function getFullName()
    {
        return $this->firstName. " ". $this->middleName. " ".$this->lastName;
    }

    public function getReverseFullName()
    {
        $fullName = $this->getFullName();
        $reverseFullName = strrev($fullName);
        return $reverseFullName;
    }
}


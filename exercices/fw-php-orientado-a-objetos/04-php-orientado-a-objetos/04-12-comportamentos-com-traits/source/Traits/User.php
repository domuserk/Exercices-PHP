<?php


namespace Source\Traits;


class User
{
private $firsName;
private $lastName;
private $email;

    /**
     * User constructor.
     * @param $firsName
     * @param $lastName
     * @param $email
     */
    public function __construct($firsName, $lastName, $email)
    {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirsName()
    {
        return $this->firsName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


}
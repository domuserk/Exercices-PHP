<?php


namespace Source\Related;


class User
{
    private $job;
    private $firstname;
    private  $lastname;

    /**
     * User constructor.
     * @param $job
     * @param $firstname
     * @param $lastname
     */
    public function __construct($job, $firstname, $lastname)
    {
        $this->job = $job;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }


}
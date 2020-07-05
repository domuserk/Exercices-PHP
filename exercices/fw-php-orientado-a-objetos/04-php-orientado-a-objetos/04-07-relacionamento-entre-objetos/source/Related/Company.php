<?php


namespace Source\Related;


class Company
{
private $company;

    /**
     * @var Address
     */
private $address;

private $team;
private $products;

public function bootCompany($company,$address){
    $this->company=$company;
    $this->address=$address;
}

    /**
     * @param mixed $company
     */
    public function boot($company,Address $address)
    {
        $this->company = $company;
        $this->address=$address;
    }
    public function addProduct( Products $product){
        $this->products[]=$product;

    }
    public function addTeamMember($job,$firstname,$lastname){

        $this->team[]= new User($job,$firstname,$lastname);
    }
    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }



}
<?php


class User
{
    private $username;
    private $password;
    private $amountOfMoney;
    private $id;
    private $children = array();

    /**
     * User constructor.
     * @param $username
     * @param $password
     * @param $amountOfMoney
     */
    public function __construct($username, $password, $amountOfMoney, $id)
    {
        $this->username = $username;
        $this->password = $password;
        $this->amountOfMoney = $amountOfMoney;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAmountOfMoney()
    {
        return $this->amountOfMoney;
    }

    /**
     * @param mixed $amountOfMoney
     */
    public function setAmountOfMoney($amountOfMoney)
    {
        $this->amountOfMoney = $amountOfMoney;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function addChild($id)
    {
        $this->children->add($id);
    }

}
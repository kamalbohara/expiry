<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 7:45 PM
 */

namespace app\models;


class ValidationData
{
    public $email;
    public $password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
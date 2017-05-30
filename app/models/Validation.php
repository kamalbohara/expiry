<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 7:31 PM
 */

namespace app\models;


class Validation extends ValidationData
{
    public function validationCheck(): bool
    {
        if ( $this->validateEmail($this->getEmail()) && $this->validatePassword($this->getPassword()) ) {
            return true;
        }
        return false;
    }

    /**
     * @param string $email
     * @return bool
     */
    public function validateEmail(string $email): bool
    {
        if(empty($email))
        {
            throw new \Exception(ValidationMessage::EMAIL_EMPTY);
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            throw new \Exception(ValidationMessage::EMAIL_INVALID);
        }
        return true;
    }

    /**
     * @param string $password
     * @return bool
     */
    public function validatePassword(string $password): bool
    {
        if(empty($password))
        {
            throw new \Exception(ValidationMessage::PASSWORD_EMPTY);
        }

        if(!filter_var($password,FILTER_VALIDATE_REGEXP,array("options"  =>array("regexp"=>"/^.{6,25}$/"))))
        {
            throw new \Exception(ValidationMessage::PASSWORD_LENGTH);
        }
        if ( !filter_var($password, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z0-9.\-!@#$~%^]+$/"))) ) {
            throw new \Exception(ValidationMessage::PASSWORD_ALLOW_CHARACTERS);
        }

        return true;
    }
}
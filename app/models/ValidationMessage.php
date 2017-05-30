<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 7:33 PM
 */

namespace app\models;


class ValidationMessage
{
    const EMAIL_EMPTY="Email address field should not be empty.";
    const EMAIL_INVALID="Email address is not valid.";

    const PASSWORD_EMPTY="Password field should not be empty.";
    const PASSWORD_LENGTH="Password characters should between 6 to 25.";
    const PASSWORD_ALLOW_CHARACTERS="Only a-zA-Z0-9.\-!@#$~% charctesr allowed in password.";
}
<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 5:11 PM
 */

namespace app\helpers;

use app\models\LoginData;

class LoginHelper
{
    public function checkLogin()
    {
        if ( isset($_SESSION['login']) ) {
            $userData = unserialize($_SESSION['login']);
            if ( $userData instanceof LoginData ) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return bool
     */
    public function logout(): bool
    {
        session_destroy();
        return true;
    }
}
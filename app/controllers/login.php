<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 1:26 PM
 */
require_once '../config/define.inc.php';
use app\models\Login;

if ( isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $loginObj = new Login();
    $loginObj->setEmail($email);
    $loginObj->setPassword($password);

    if ( $loginObj->login() ) {
        header("Location: " . SITE_URL . "mylists.php");
        exit;
    }
}

header("Location: " . SITE_URL . "index.php?err=l");
exit;
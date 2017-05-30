<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 1:26 PM
 */
require_once '../../define.inc.php';
use app\models\Login;

if ( isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $loginObj = new Login();
    $loginObj->setEmail($email);
    $loginObj->setPassword($password);
    try {
        if ( $loginObj->login() ) {
            header("Location: " . SITE_URL . "mylists.php");
            exit;
        }
    } catch (Exception $e) {
        header("Location: " . SITE_URL . "index.php?err=".$e->getMessage());
    }

}

header("Location: " . SITE_URL . "index.php?err=l");
exit;
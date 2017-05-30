<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 7:11 PM
 */
require_once '../../define.inc.php';
use app\models\Registration;

if ( isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $regesterObj = new Registration();
    $regesterObj->setEmail($email);
    $regesterObj->setPassword($password);
    try {
        if ( $regesterObj->register() ) {
            header("Location: " . SITE_URL . "index.php?r=s");
            exit;
        }
    } catch (Exception $e) {
        header("Location: " . SITE_URL . "index.php?err=" . $e->getMessage());
        exit;
    }
}
header("Location: " . SITE_URL . "index.php?err=l");
exit;
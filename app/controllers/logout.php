<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 1:26 PM
 */
require_once '../../define.inc.php';
use app\helpers\LoginHelper;
$loginObj=new LoginHelper();
if ($loginObj->logout()) {
    header("Location: " . SITE_URL . "index.php");
    exit;
}
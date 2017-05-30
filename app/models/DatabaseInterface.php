<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 10:52 AM
 */
namespace app\models;
interface DatabaseInterface
{
    public static function connection();
    public function query();
    public function numRows();
    public function dataRows();
    public function lastInsertedId();
}
<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 12:11 PM
 */

namespace app\models;

class MySqliQuery extends MySqliDB
{
    public $sqlQuery;
    public $resultSet;


    public function __construct()
    {
        self::connection();
    }

    public function query()
    {
        return mysqli_query(self::$conn, $this->sqlQuery);
    }

    public function numRows()
    {
        return mysqli_num_rows($this->resultSet);
    }

    public function dataRows()
    {
        return mysqli_fetch_assoc($this->resultSet);
    }

    public function lastInsertedId()
    {
        return mysqli_insert_id(self::$conn);
    }
}
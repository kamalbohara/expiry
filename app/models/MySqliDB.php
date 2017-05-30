<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 10:42 AM
 */

namespace app\models\mysql;

use app\models\db\DatabaseInterface;
use app\config\dbconstant\DBConstants;

abstract class MySqliDB implements DatabaseInterface
{
    protected static $conn = null;

    final public static function connection()
    {
        if ( is_null(self::$conn) ) {
            self::$conn = mysqli_connect(DBConstants::HOST, DBConstants::USERName, DBConstants::PASSWORD, DBConstants::DATABASENAME);
        }
        return self::$conn;
    }

    public function __destruct()
    {
        mysqli_close(self::$conn);
    }

    abstract public function query();

    abstract public function numRows();

    abstract public function dataRows();

    abstract public function lastInsertedId();
}
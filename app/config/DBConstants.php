<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 10:49 AM
 */

namespace app\config\dbconstant;
use app\config\constant\Constants;

class DBConstants extends Constants
{
    const HOST = '192.168.2.100';
    const USERName = 'global';
    const PASSWORD = 'global';
    const DATABASENAME = 'expiry';
    const FROM = " from ";
    const SELECT = "select ";
    const ALL_FIELDS = " * ";
    const INSERT = "insert into ";
    const INTO = " into ";
    const OPEN_BRAKET = "(";
    const CLOSE_BRAKET = ")";
    const VALUES = " values";
    const UPDATE = "update ";
    const SET = " set ";
    const DELETE = "delete ";
    const DATABASE="MYSQL";
}
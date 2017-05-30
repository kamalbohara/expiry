<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 6:08 PM
 */

namespace app\models;
class Registration extends UserData
{
    private $queryObj;
    private $queryFactoryObj;
    private $queryBuidlerObj;
    private $validateObj;
    public function __construct()
    {
        $this->validateObj = new Validation();
    }

    public function register(): bool
    {
        $this->validateObj->setEmail($this->getEmail());
        $this->validateObj->setPassword($this->getPassword());

        if ( $this->validateObj->validationCheck() ) {
            $this->queryFactoryObj = new QueryFactory();
            $this->queryObj = $this->queryFactoryObj->getQueryObject();
            $this->queryBuidlerObj = $this->queryFactoryObj->getQueryBuilder();

            if ( $this->isNotExist() ) {
                $this->queryBuidlerObj->setTabelName('users');
                $this->queryBuidlerObj->setFields(array('email', 'password'));
                $this->queryBuidlerObj->setValues(array($this->getEmail(), $this->getPassword()));
                $this->queryObj->sqlQuery = $this->queryBuidlerObj->insert();
                $this->queryObj->resultSet = $this->queryObj->query();

                return true;
            }
        }
        return false;
    }

    private function isNotExist(): bool
    {
        $this->queryBuidlerObj->setTabelName('users');
        $this->queryBuidlerObj->setFields(array('id'));
        $this->queryBuidlerObj->setLimit(1);
        $this->queryBuidlerObj->setWhere(array('email' => $this->getEmail()));
        $this->queryObj->sqlQuery = $this->queryBuidlerObj->select();
        $this->queryObj->resultSet = $this->queryObj->query();
        $numRows = $this->queryObj->numRows();
        if ( $numRows > 0 ) {
            return false;
        }
        return true;
    }

}
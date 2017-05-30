<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 1:23 PM
 */

namespace app\models\login;

use app\models\logindata\LoginData;
use app\models\queryfactory\QueryFactory;

class Login extends LoginData
{
    private $queryObj;
    private $queryFactoryObj;
    private $queryBuidlerObj;
    private $loginData;
    public function login(): bool
    {
        if ( $this->validationCheck() ) {
            $this->queryFactoryObj = new QueryFactory();
            $this->queryObj = $this->queryFactoryObj->getQueryObject();

            $this->queryBuidlerObj = $this->queryFactoryObj->getQueryBuilder();
            $this->queryBuidlerObj->setTabelName('users');
            $this->queryBuidlerObj->setFields(array('id','email'));
            $this->queryBuidlerObj->setLimit(1);
            $this->queryBuidlerObj->setWhere(array('email' => $this->getEmail()));

            $this->queryObj->sqlQuery = $this->queryBuidlerObj->select();
            $this->queryObj->resultSet=$this->queryObj->query();
            $numRows=$this->queryObj->numRows();

            if($numRows>0)
            {
                $resultData=$this->queryObj->dataRows();
                $this->loginData = new LoginData();
                $this->loginData->setId($resultData['id']);
                $this->loginData->setEmail($resultData['email']);
                $_SESSION['login'] = serialize($this->loginData);

                return true;
            }
            return false;
        }
    }

    private function validationCheck()
    {
        return true;
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 1:36 PM
 */
namespace app\models;
use app\config\DBConstants;
use app\models\MySqliQueryBuider;
class QueryFactory
{
    public $queryInstance;
    public $queryBuilderInstance;
    public function getQueryObject()
    {
        switch(DBConstants::DATABASE)
        {
            case 'MYSQL':
                    $this->queryInstance=new MySqliQuery();
                break;
            case 'MANGO':
                    //
                break;
        }
        return $this->queryInstance;
    }

   public function getQueryBuilder()
   {
       switch(DBConstants::DATABASE)
       {
           case 'MYSQL':
               $this->queryBuilderInstance=new MySqliQueryBuider();
               break;
           case 'MANGO':
               //
               break;
       }
       return $this->queryBuilderInstance;
   }
}
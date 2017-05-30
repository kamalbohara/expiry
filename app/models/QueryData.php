<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 1:13 PM
 */
namespace app\models\querydata;
class QueryData
{
    public $tabelName;
    public $fields;
    public $values;
    public $where;
    public $order;
    public $limit;
    public $joinTable;
    public $joinFields;

    /**
     * @return mixed
     */
    public function getJoinFields()
    {
        if(is_null($this->joinFields))
        {
            return array();
        }
        return $this->joinFields;
    }

    /**
     * @param mixed $joinFields
     */
    public function setJoinFields($joinFields)
    {

        $this->joinFields = $joinFields;
    }
    /**
     * @return mixed
     */
    public function getJoinTable()
    {
        if(is_null($this->joinTable))
        {
            return '';
        }
        return $this->joinTable;
    }

    /**
     * @param mixed $join
     */
    public function setJoinTable($joinTable)
    {
        if(is_null($this->joinTable))
        {
            return '';
        }
        $this->joinTable = $joinTable;
    }

    /**
     * @return mixed
     */
    public function getTabelName()
    {
        return $this->tabelName;
    }

    /**
     * @param mixed $tabelName
     */
    public function setTabelName($tabelName)
    {
        $this->tabelName = $tabelName;
    }

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return mixed
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param mixed $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * @return mixed
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * @param mixed $where
     */
    public function setWhere($where)
    {
        $this->where = $where;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        if(is_null($this->order))
        {
            return array();
        }
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        if(is_null($this->limit))
        {
            return '';
        }
        return $this->limit;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

}
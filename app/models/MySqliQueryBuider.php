<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 12:26 PM
 */

namespace app\models;

use app\config\DBConstants;
use app\helpers\QueryBuilderHelper;

class MySqliQueryBuider extends QueryData implements QueryBuilderInterface
{
    use QueryBuilderHelper;

    public function select(): string
    {
        $sql = DBConstants::SELECT;
        $sql .= $this->selectedFields();
        $sql .= DBConstants::FROM . $this->getTabelName();
        $sql .= $this->join();
        $sql .= $this->where();
        $sql .= $this->order();
        $sql .= $this->limit();

        return $sql;
    }

    public function insert(): string
    {
        $sql = DBConstants::INSERT;
        $sql .= $this->getTableName();
        $sql .= $this->insertFieldNames();
        $sql .= Constants::VALUES . Constants::OPEN_BRAKET;
        $sql .= $this->insertValues();
        $sql .= Constants::CLOSE_BRAKET;

        return $sql;
    }

    public function update(): string
    {
        $sql = DBConstants::UPDATE;
        $sql .= $this->getTableName();
        $sql .= DBConstants::SET;;
        $sql .= $this->updateFields();
        $sql .= $this->where();

        return $sql;
    }

    public function delete()
    {
        $sql = DBConstants::DELETE;
        $sql .= DBConstants::FROM . $this->getTabelName();
        $sql .= $this->where();

        return $sql;
    }

    private function selectedFields(): string
    {
        return $this->convertFieldsToString($this->getFields())?? DBConstants::ALL_FIELDS;
    }

    private function where(): string
    {
        return $this->mySqlWhereCondition($this->getWhere());
    }

    private function join(): string
    {
        return $this->mySqlJoin($this->getJoinTable(),$this->getJoinFields());
    }
    private function order(): string
    {
        return $this->mySqlOrderBy($this->getOrder());
    }

    private function limit(): string
    {
        return $this->mySqllimit($this->getLimit());
    }

    private function insertValues(): string
    {
        return $this->convertFieldsToString($this->getValues());
    }

    private function updateFields(): string
    {
        return $this->convertFieldsToString($this->getValues());
    }
}
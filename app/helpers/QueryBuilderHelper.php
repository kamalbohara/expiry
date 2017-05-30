<?php

/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 12:35 PM
 */

namespace app\helpers;

use app\config\Constants;

trait QueryBuilderHelper
{
    /**
     * @param array $fields
     * @return string
     */
    private function convertFieldsToString(array $fields): string
    {
        $fieldVal = '';
        if ( count($fields) > 0 ) {
            foreach ($fields as $field) {
                $fieldVal .= $field . Constants::COMMA;
            }
            $fieldVal = substr($fieldVal, 0, strlen($fieldVal) - 1) . Constants::SPACE;
        }
        return $fieldVal;
    }

    /**
     * @param $value
     * @return string
     */
    private function fieldBindingWithSingleQuote($value): string
    {
        return Constants::SINGLEQOUTE . $value . Constants::SINGLEQOUTE;
    }

    private function mySqlWhereCondition(array $wheres): string
    {
        $str = '';
        if ( count($wheres) > 0 ) {
            $str = Constants::WHERE;
            foreach ($wheres as $key => $value) {
                $str .= $key . Constants::EQUALTO;
                $str .= $this->fieldBindingWithSingleQuote($value);
                $str .= Constants:: AND;
            }
            $str = substr($str, 0, strlen($str) - 5);
        }
        return $str;
    }

    private function mySqlOrderBy(array $orders)
    {
        $str = $this->convertFieldsToString($orders);
        if ( !empty($str) ) {
            $str = Constants::ORDERBY . $str;
        }
        return $str;
    }

    private function mySqllimit(string $limit): string
    {
        $str = '';
        if ( !empty($limit) ) {
            $str = Constants::LIMIT . $limit;
        }
        return $str;
    }

    private function mySqlJoin(string $joinTable, array $joinFields): string
    {
        $str = '';
        if ( !empty($joinTable) && count($joinFields) > 0 ) {
            $str = Constants::INNER_JOIN . $joinTable;
            $str .= Constants::INNER_JOIN_ON;
            $joinStr = '';
            foreach ($joinFields as $key => $field) {
                $joinStr .= empty($joinStr) ? $key . "." . $field : Constants::EQUALTO . $key . "." . $field;
            }

            $str .= $joinStr;
        }
        return $str;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: kamal
 * Date: 5/30/2017
 * Time: 12:24 PM
 */

namespace app\models;
interface QueryBuilderInterface
{
    public function select();

    public function insert();

    public function update();

    public function delete();
}
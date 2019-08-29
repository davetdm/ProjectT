<?php

/**
 * Created by PhpStorm.
 * User: projectx
 * Date: 2019/08/29
 * Time: 10:08 AM
 */
final class ProductModel extends Model
{
    public function __construct($cnx = null)
    {
        parent::__construct($cnx, "product");
    }
}
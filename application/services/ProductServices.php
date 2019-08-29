<?php

/**
 * Created by PhpStorm.
 * User: projectx
 * Date: 2019/08/29
 * Time: 11:07 AM
 */
final class ProductServices
{
    protected $cnx;

    public function __construct($cnx)
    {
        $this->cnx = $cnx;
    }
    public function getProducts()
    {
        $productModel = new ProductModel($this->cnx);
        return $productModel->get();
    }
    public function addInfo($data)
    {
        $productModel = new ProductModel($this->cnx);
        if($data["id"]=="")
        {
            unset ($data["id"]);
            $productModel->insert($data);
            return Utils::response("Ok");
        }else{
            $productModel->update($data);
            return Utils::response("Updated");
        }
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: projectx
 * Date: 2019/08/29
 * Time: 12:32 PM
 */
final class ProductController extends Controller {

    function __construct() {
        parent::__construct();
        $this->tokenKey = "product_key";
        $this->view->setTitle("Product" . SITE_TITLE);
    }

    public function index(){
        $this->view->render("product");
    }

}
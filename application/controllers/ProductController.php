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

    public function index()
    {
        $productServices = new ProductServices($this->cnx);
        $product = $productServices->getProducts();
        $this->view->setData($product);
       // $this->view->render("product");
    }

    //add the product items in the product list
    public function addCart()
    {

        $cart = new Cart();
        $this->form->post("id")
            ->post("qty");
        $id = $this->form->fetchPost("id");
        $productModel =new ProductModel($this->cnx);
        $product = $productModel->get($id);

        $item = [
          "id" =>  $product->id,
          "name"=>  $product->color,
           "price" => $product->price,
           "qty" => $product->qty
        ];
       $cart->insert($item);
        $contents = $cart->contents();
        foreach($contents as $key => $content){

        }
        $productServices = new ProductServices($this->cnx);
        $productServices->addInfo($this->form->fetchPost());


    }
    public function check_out(){

        $this->view->render("checkout");

    }

}

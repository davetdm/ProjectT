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
      //  $this->view->render("product");
    }
    public function add()
    {
        $this->form->post("id")
            ->post("color")
            ->post("price")
            ->post("qty");
        $productServices = new ProductServices($this->cnx);
        echo $productServices->addInfo($this->form->fetchPost());
    }
    //add the product items in the product list
    public function add_cart()
    {
        $cart = new Cart();
        $this->form->post("id")
                   ->post("qty");
        $id = $this->form->fetchPost("id");
        $productModel = new ProductModel($this->cnx);
        $product = $productModel->get($id);

        $item = [
          "id"=> $product['id'],
          "color" => $product['color'],
          "price" => $product['price'],
           "qty"=> $product['qty']
        ];
       $cart->insert($item);
       $contents = $cart->contents();
       foreach($contents as $key => $content)
       {
           $cart->update($content);
            $content->name;
            $content->price;
            $content->qty;
            $content->subtotal;
       }
    }
    public function delete_item($id){
        $cart = new Cart();
        $cart->remove($id);
    }
    public function check_out(){
        $id = $_GET["id"];
        $productModel = new ProductModel($this->cnx);
        $product = $productModel->get($id);
        $this->view->setData($product);

    }

}


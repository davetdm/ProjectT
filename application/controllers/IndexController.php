<?php

/**
 * Description of IndexController
 *
 * @author Johannes Ramothale <jramothale@iecon.co.za>
 * @since 09 Jan 2017, 7:07:01 PM
 */

final class IndexController extends Controller {

    function __construct() {
        parent::__construct();
        $this->tokenKey = "index_key";
<<<<<<< HEAD
        $this->view->setTitle("Product" . SITE_TITLE);
=======
        $this->view->setTitle("Shopping Cart" . SITE_TITLE);
>>>>>>> c65233ec4c244f782384147df8093dce65d4fb78
    }

    public function index() {
        $this->view->render("product");
    }

}

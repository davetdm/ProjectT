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
        $this->view->setTitle("Tuttie" . SITE_TITLE);
    }

    public function index() {
        $this->view->render("home");
    }

}

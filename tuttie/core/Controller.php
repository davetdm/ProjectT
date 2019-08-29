<?php

/**
 * Description of Controller
 *
 * The Controller create the database connection, then pass it to the Model class.
 * The Controller has the Model and the View
 *
 * @author jramothale
 */
class Controller {

    /** @var object $view - The view class reference */
    protected $view;

    /** @var object $form - The form class reference */
    protected $form;

    /** @var object $csrf - The CSRF class reference */
    protected $csrf;

    /** @var object $acl - The Access Control List class reference */
    protected $acl;

    /** @var object $mailer - The SwiftMailer class reference */
    protected $mailer;

    /** @var string $context - Defines the context of a controller */
    protected $context;

    /** @var string $tokenKey - The CSRF token key */
    protected $tokenKey;

    /** @var object $cnx - The database connection reference */
    protected $cnx;

    /**
     * Controller constructor.
     * @param null $dbconfig - database configuration
     */
    public function __construct($dbconfig = null) {
        $this->view = new View();
        $this->form = new Form();
        $this->acl = null;
        $this->mailer = null;
        $this->csrf = new NoCSRF();
        $this->tokenKey = "";
        $this->initSession();
        try {
            if (!is_null($dbconfig)) {
                $this->cnx = new Database($dbconfig);
            }
        } catch (Exception $ex) {

        }
    }

    protected function initSession() {
        $session = new SessionManager();
        $session->start();
    }

    /**
     * redirect - Redirects to the specified URL
     *
     * @param type $url URL to redirect to
     */
    protected function redirect($url) {
        header("Location: " . ROOT_URL . $url);
    }

    public function setContext($context) {
        $this->context = $context;
    }

    public function isCorrectContext($context) {
        return $this->context === $context;
    }

}

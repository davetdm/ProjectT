<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once FRAMEWORK_PATH . 'mailer/Exception.php';
require_once FRAMEWORK_PATH . 'mailer/PHPMailer.php';
require_once FRAMEWORK_PATH . 'mailer/POP3.php';

final class TSimplePOP {

    private $hostname;
    private $port;
    private $flags;
    private $dns;
    private $email;
    private $password;
    private $openmail;
    private $mailbox = "INBOX";

    function __construct($hostname, $port = "143", $flags = "") {
        $this->hostname = $hostname;
        $this->port = $port;
        $this->flags = $flags;
        $this->setDns();
    }

    public function authenticate($email, $password){
        $this->email = $email;
        $this->password = $password;
        $this->open();
    }

    public function changeMailbox($mailbox){
        $this->mailbox = $mailbox;
        $this->setDns();
        $this->open();
    }

    public function getOpenMailResource(){
        if($this->openmail){
            return $this->openmail;
        }
        return null;
    }

    public function getHeader($key){
        if($key){
            return imap_header($this->openmail, $key);
        }
    }

    public function getNumberOfMessages(){
        if($this->openmail){
            return imap_num_msg($this->openmail);
        }
        return 0;
    }

    public function getMailbox(){
        return $this->mailbox;
    }

    protected function open(){
        $this->openmail = imap_open($this->dns, $this->email, $this->password);
    }

    protected function setDns(){
        $this->dns = "{" . $this->hostname . ":" . $this->port . $this->flags . "}$this->mailbox";
    }


}
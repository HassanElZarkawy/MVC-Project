<?php


class Platform {
    protected $database;
    protected $POST;
    protected $GET;
    protected $response;
    
    public function __construct()
    {
        $this->database = DbContext::getInstance();
        $this->POST = Utility::Objectify($_POST);
        $this->GET = Utility::Objectify($_GET);
        $this->response = new Response();
    }
}
?>
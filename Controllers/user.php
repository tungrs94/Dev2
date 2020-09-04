<?php

require_once "Models/postList.php";

class user
{
    protected $postList;
    public function __construct()
    {
        $this->postList = new postList();
    }
    public function index()
    {
        $tb = $this->postList->getData();
        require_once 'Views/Frontend/frontend.php';
    }
    public function show(){
        if (isset($_GET['id'])){
            $tb=$this->postList->getPost($_GET['id']);
            require 'Views/Frontend/showPost.php';
        }
    }
}

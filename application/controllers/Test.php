<?php
class Test extends CI_Controller{
    function index(){
        $this->load->view('test');
    }
    
    function hello(){
        echo "Hello";
    }
}
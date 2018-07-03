<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Account extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('listing');
    }
 
    function index(){
        $this->load->view('header');
        $this->load->view('add_account');
        $this->load->view('footer');
    } 
}
?>
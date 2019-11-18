<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
    }

    public function index(){
        $this->load->view('partial/header');
        $this->load->view('index');
        $this->load->view('partial/footer');
    }
    
}
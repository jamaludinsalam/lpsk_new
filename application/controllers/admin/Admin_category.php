<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("category_model");
        $this->load->library('form_validation');
        $this->load->helper(array('url'));
    }

    public function get_category_news()
    {
        $data["categories"] = $this->category_model->getCategoryNews();
        // $this->load->view("admin/pers_release", $data);
    }

    public function getCategoryById($id) 
    {
        
    }
}
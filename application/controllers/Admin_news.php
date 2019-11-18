<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_news extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("news_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["newss"] = $this->news_model->getAll();
        $this->load->view("admin/admin_news_pers_release", $data);
    }

    public function add_pers_release()
    {
        $news = $this->news_model;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $news->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/news/pers_release/new_form");
    }

    public function edit_pers_release($id = null)
    {
        if (!isset($id)) redirect('admin/news');
       
        $news = $this->news_model;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $news->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["news"] = $news->getById($id);
        if (!$data["news"]) show_404();
        
        $this->load->view("admin/news/pers_release/edit_form", $data);
    }

    public function delete_pers_release($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->news_model->delete($id)) {
            redirect(site_url('admin/news/pers_release'));
        }
    }
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_news extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("news_model");
        $this->load->model("category_model");
        $this->load->library('form_validation');
        $this->load->helper(array('url'));
        $this->load->library('pagination');
    }

    public function pers_release()
    {

        $data["categories"] = $this->category_model->getCategoryById($cat_id);
        $data["newss"] = $this->news_model->getAllPers();
        $data["cat_id"] = $this->news_model->getAllPers();

       
        
        $this->load->view("admin/pers_release", $data);
        print_r($cat_id);
        die();
    }
    public function warta_hukum()
    {
        $data["newss"] = $this->news_model->getAllWarta();
        $this->load->view("admin/warta_hukum", $data);
    }
    
    public function pers_release_new()
    {
        $data["categories"] = $this->category_model->getCategoryNews();
        $this->load->view("admin/pers_release_new", $data);
        // print_r($data);
        // die();
    }
    public function warta_hukum_new()
    {
        $this->load->view("admin/warta_hukum_new");
    }
    public function pers_post()
    {
        $news = $this->news_model;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if($validation->run()){
            $news->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
            
            redirect('admin/admin_news/pers_release');
        } 
        $this->load->view("admin/pers_release_new");
      
    }
    public function warta_post()
    {
        $news = $this->news_model;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if($validation->run()){
            $news->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
            
            redirect('admin/admin_news/warta_hukum');
        } 
        $this->load->view("admin/warta_hukum_new");
      
    }

    public function pers_release_edit($id)
    {
       
        $news = $this->news_model;
        $where = array('id' => $id);
        $data["newss"] = $news->edit_data($where,'news');
        $this->load->view("admin/pers_release_edit", $data);

    }

      

    public function news_update()
    {   
        $id  = $this->input->post('id');
        $news_title = $this->input->post('news_title');
        $news_content = $this->input->post('news_content');
        // $news_created_date = $this->input->post('news_created_date');
        $news_published_at = $this->input->post('news_published_at');
        $news_active = $this->input->post('news_active');
        $image_id = $this->input->post('image_id');
        $category_id = $this->input->post('category_id');
        $users_id = $this->input->post('users_id');
        $comment_id = $this->input->post('comment_id');

        $data = array(
            'id'                => $id,
            'news_title'        => $news_title,
            'news_content'      => $news_content,
            // 'news_created_date' => $news_created_date,
            'news_published_at' => $news_published_at,
            'news_active'       => $news_active,
            'image_id'          => $image_id,
            'category_id'       => $category_id,
            'users_id'          => $users_id,
            'comment_id'        => $comment_id
        );

        $where = array(
            'id' => $id
        );
        
        $news = $this->news_model;
        $validation = $this->form_validation;
        $validation->set_rules($news->rules());

        if ($validation->run()) {
            $this->news_model->update_data($where, $data, 'news');
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/admin_news/pers_release');
            
        } else {
            $this->load->view("admin/pers_release_edit");
            $this->session->set_flashdata('success', 'GAGAL disimpan');
        }


      
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->news_model->delete($id)) {
            redirect(site_url('admin/admin_news/pers_release'));
        }
    }
}
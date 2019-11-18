<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
    private $_news = "news";
    private $_category = "category";

    public $id;
    public $news_title;
    public $news_content;
    public $news_created_at;
    public $news_published_at;
    public $news_active = 1;
    public $image_id;
    public $category_id;
    public $users_id;
    public $comment_id;

    public function rules_update()
    {
        return [

            ['field' => 'news_title',
            'label' => 'Title',
            'rules' => 'required|is_unique'],

            ['field' => 'news_content',
            'label' => 'Content',
            'rules' => 'required|is_unique'],
            
            ['field' => 'written_by',
            'label' => 'Written By',
            'rules' => 'required|is_unique']
        ];
    }
    public function rules()
    {
        return [

            ['field' => 'news_title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'news_content',
            'label' => 'Content',
            'rules' => 'required'],
            
            ['field' => 'image_id',
            'label' => 'Image',
            'rules' => 'required']
        ];
    }
    
    function data($number,$offset)
    {
		return $query = $this->db->get($this->_news ,$number,$offset)->result();		
    }
    
    public function getAllPers()
    {
        
        return $this->db->get_where($this->_news, array('category_id' => '1'))->result();
    }
    public function getAllWarta()
    {
        return $this->db->get_where($this->_news, array('category_id' => '2'))->result();
        
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_news, ["id" => $id])->row();
    }

    public function save()
    {   
        
        $post = $this->input->post();
        $this->id;
        $this->news_title = $post["news_title"];
        $this->news_content = $post["news_content"];
        $this->news_created_at = $post["news_created_at"];
        // $this->news_published_at = $post["news_last_updated"];
        $this->news_active = $post["news_active"];
        $this->image_id = $post["image_id"];
        $this->category_id = $post["category_id"];
        $this->users_id = $post["users_id"];
        $this->users_id = $post["users_id"];
        $this->comment_id = $post["comment_id"];
        $this->db->insert($this->_news, $this);
    }

    function edit_data($where, $table)
    {		
        return $this->db->get_where($table ,$where)->row();
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
		$this->db->update($table, $data);
        print_r($this->db->update($table, $data));
        die();
      
    }

    public function delete($id)
    {
        return $this->db->delete($this->_news, array("id" => $id));
    }

    private function _getCategoryNews()
    {
        // return $this->db->get_where($this->_category, array('id' => '1', '2'))->result();
        return $this->db->get($this->_category)->result();
        
    }
}
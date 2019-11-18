<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
    private $_category = "category";

    public $id;
    public $category_name;

       
    public function getCategoryNews()
    {
        return $this->db->get($this->_category)->result();
    }

    public function getCategoryById($id)
    {
        $query = $this->db  ->select('*')
                            ->from($this->_category)
                            ->where('id', $id)
                            ->get(); 
            
        return $query->row();
    }

    
}
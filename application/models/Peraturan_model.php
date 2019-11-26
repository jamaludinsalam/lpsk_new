<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
		//$this->db2 = $this->load->database('websitemk',true);
    }
	
	function getDataPeraturan($limit,$offset,$cari,$jenis)
	{
		$this->db->select('*');
		$this->db->select("DATE_FORMAT(rules_created_date, '%d %M %Y')as tgl", false);
		$this->db->where('rules_active', 1);
		$this->db->where('rules_type', $jenis);
		// print_r($jenis);
		// die();
		if ($cari != '') {
			$this->db->like('LOWER(news_title)', strtolower($cari));
		}
		
		$this->db->from('rules');
		$this->db->order_by('rules_created_date','desc');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function getCountDataPeraturan($cari,$Jenis) 
	{
		$this->db->select('*');
		$this->db->where('rules_active', 1);
		$this->db->where('rules_type', $Jenis);
		
		if ($cari != '') {
			$this->db->like('LOWER(rules_title)', strtolower($cari));
		}
		
		$this->db->from('rules');
		$query = $this->db->get();

		return count($query->result());
	}
}
	
// 	function getDataDetailPublikasi($id)
// 	{
// 		$this->db->select('*');
// 		$this->db->select("DATE_FORMAT(news_created_date, '%d %M %Y')as tgl", false);
// 		$this->db->where('news_active', 1);
// 		$this->db->where('news_id', $id);
		
// 		$this->db->from('news');
// 		$query = $this->db->get();
		
// 		if ($query->num_rows() > 0) {
// 			foreach ($query->result() as $row) {
// 				$data[] = $row;
// 			}
// 			return $data;
// 		}
// 		return false;
// 	}
	
// 	function getDataGallery($limit,$offset,$cari)
// 	{
// 		$this->db->select('*');
// 		$this->db->where('image_active', 1);
		
// 		if ($cari != '') {
// 			$this->db->like('LOWER(image_title)', strtolower($cari));
// 		}
		
// 		$this->db->from('gallery');
// 		$this->db->order_by('image_id','desc');
// 		$this->db->limit($limit, $offset);
// 		$query = $this->db->get();
		
// 		if ($query->num_rows() > 0) {
// 			foreach ($query->result() as $row) {
// 				$data[] = $row;
// 			}
// 			return $data;
// 		}
// 		return false;
// 	}
	
// 	public function getCountDataGallery($cari) 
// 	{
// 		$this->db->select('*');
// 		$this->db->where('image_active', 1);
		
// 		if ($cari != '') {
// 			$this->db->like('LOWER(image_title)', strtolower($cari));
// 		}
		
// 		$this->db->from('gallery');
// 		$query = $this->db->get();

// 		return count($query->result());
// 	}
// }
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi_model extends CI_Model 
{
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('text');
		$this->load->database();
		//$this->db2 = $this->load->database('websitemk',true);
    }
	
	function getDataPublikasi($limit,$offset,$cari,$jenis)
	{
		$this->db->select('*');
		$this->db->select("DATE_FORMAT(news_created_date, '%d %M %Y')as tgl", false);
		$this->db->where('news_active', 1);
		$this->db->where('news_type_id', $jenis);
		
		if ($cari != '') {
			$this->db->like('LOWER(news_title)', strtolower($cari));
		}
		
		$this->db->from('news');
		$this->db->order_by('news_created_date','desc');
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
	
	public function getCountDataPublikasi($cari,$Jenis) 
	{
		$this->db->select('*');
		$this->db->where('news_active', 1);
		$this->db->where('news_type_id', $Jenis);
		
		if ($cari != '') {
			$this->db->like('LOWER(news_title)', strtolower($cari));
		}
		
		$this->db->from('news');
		$query = $this->db->get();

		return count($query->result());
	}
	
	function getDataDetailPublikasi($id)
	{
		$this->db->select('*');
		$this->db->select("DATE_FORMAT(news_created_date, '%d %M %Y')as tgl", false);
		$this->db->where('news_active', 1);
		$this->db->where('news_id', $id);
		
		$this->db->from('news');
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	function getDataGallery($limit,$offset,$cari)
	{
		$this->db->select('*');
		$this->db->where('image_active', 1);
		
		if ($cari != '') {
			$this->db->like('LOWER(image_title)', strtolower($cari));
		}
		
		$this->db->from('gallery');
		$this->db->order_by('image_id','desc');
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
	
	public function getCountDataGallery($cari) 
	{
		$this->db->select('*');
		$this->db->where('image_active', 1);
		
		if ($cari != '') {
			$this->db->like('LOWER(image_title)', strtolower($cari));
		}
		
		$this->db->from('gallery');
		$query = $this->db->get();

		return count($query->result());
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model 
{
	public function __construct()
    {
		parent::__construct();
		$this->load->database();
		//$this->db2 = $this->load->database('websitemk',true);
    }
	

	function getSekilas(){
		$this->db->select('*');
		$this->db->where('profile_type_id', 5);
		$this->db->where('profile_active', 1);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	
	function getStruktur(){
		$this->db->select('*');
		$this->db->where('profile_id', 36);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getRoadmap(){
		$this->db->select('*');
		$this->db->where('profile_jenis', 4);
		$this->db->where('profile_active', 1);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getDataProfil($limit,$offset,$cari,$jenis)
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


	
	
	public function getCountDataProfil($cari,$Jenis) 
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
	
	function getDataDetailProfil($id)
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
	
	function getPejabat()
	{
		$this->db->select('*');
		$this->db->where('profile_jenis', 2);
		$this->db->where('profile_active', 1);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getPejabatDetail($id)
	{
		$this->db->select('*');
		$this->db->where('profile_id', $id);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getPimpinan()
	{
		$this->db->select('*');
		$this->db->where('profile_type_id', 1);
		$this->db->where('profile_active', 1);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getPimpinanDetail($id)
	{
		$this->db->select('*');
		$this->db->where('profile_id', $id);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	
}
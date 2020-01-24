<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model 
{
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('text');
		$this->load->database();
		//$this->db2 = $this->load->database('websitemk',true);
    }
	
	function getBerita() 
	{
		$this->db->select('*');
		$this->db->where('news_type_id', 4);
		$this->db->where('news_active', 1);
		$this->db->order_by('news_created_date','desc');
		$this->db->from('news');
		$this->db->limit(2);
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	function getPers() 
	{
		$this->db->select('*');
		$this->db->where('news_type_id', 5);
		$this->db->where('news_active', 1);
		$this->db->order_by('news_created_date','desc');
		$this->db->from('news');
		$this->db->limit(1);
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	
	
	function getWarta() 
	{
		$this->db->select('*');
		$this->db->where('news_type_id', 6);
		$this->db->where('news_active', 1);
		$this->db->order_by('news_created_date','desc');
		$this->db->from('news');
		$this->db->limit(1);
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getNewsTicker()
	{
		

		$this->db->select('*');
		$this->db->order_by('sp_id','desc');
		$this->db->from('splash_promotion');
		$this->db->limit(5);

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getBanner(){
		$this->db->select('*');
		// $this->db->where('banner_active', 1);
		$this->db->order_by('sp_id','desc');
		$this->db->from('splash_promotion');

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getCountBanner(){
		$this->db->select('*');
		$this->db->where('banner_active', 1);
		$this->db->order_by('banner_priority','desc');
		$this->db->from('banner');

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data->num_row();

			print_r($data->num_row());
			die();
	}

	function getStatistik(){
		$this->db->select('st_saksi, st_ahli, st_perlindungan_anak, st_pelapor');
		$this->db->where('st_id', 1);
		$this->db->from('statistik');

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;


	}

	function getCerita(){
		$this->db->select('*');
		$this->db->order_by('cerita_id','desc');
		$this->db->from('cerita');
		$this->db->limit(3);

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;


	}
	
	
	function getPejabat()
	{
		$this->db->select('*');
		$this->db->where('profile_type_id', 2);
		$this->db->where('profile_active', 1);
		$this->db->from('profile');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	
	
	
	
	
	
	function getDataBerita($limit,$offset,$cari,$jenis)
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


	function getDataBeritaLimiter($limit,$offset,$cari,$jenis)
	{
		
		// $this->db->select('*');
		$this->db->select('LEFT("news_content ", 10)', false);
		$this->db->select("DATE_FORMAT(news_created_date, '%d %M %Y')as tgl", false);
		
		$this->db->where('news_active', 1);
		$this->db->where('news_type_id', $jenis);
		
		
		
		$this->db->from('news');
		// $this->db->where('LEFT("news_content", 10)', false);
		// $this->db->order_by('news_created_date','desc');

		// $this->db->limit($limit, $offset);
		$query = $this->db->get()->result();
		$content = $this->db->select(LEFT($query, 10));
		// return $content;
		print_r($content);
		die();
		// if ($query->num_rows() > 0) {
		// 	foreach ($query->result() as $row) {
		// 		$datalimit[] = $row->news_content;
		// 		$data[] = LEFT($datalimit[], 10);
		// 	}
		// 	return $data;
		// }
		// return false;
	}
	
	public function getCountDataBerita($cari,$Jenis) 
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
	
	function getDataDetailBerita($id)
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
	
	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends CI_Model 
{
	public function __construct()
    {
		parent::__construct();
		$this->load->database();
		//$this->db2 = $this->load->database('websitemk',true);
    }
	

	function getInformasiPublik()
	{
		$this->db->select('*');
		$this->db->where('page_id', 1);
		$this->db->from('page');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	
	function getPedoman()
	{
		$this->db->select('*');
		$this->db->where('page_id', 2);
		$this->db->from('page');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getStandar()
	{
		$this->db->select('*');
		$this->db->where('page_id', 3);
		$this->db->from('page');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getStruktur()
	{
		$this->db->select('*');
		$this->db->where('page_id', 7);
		$this->db->from('page');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}

	function getFormulir1()
	{
		$this->db->select('*');
		$this->db->where('page_id', 8);
		$this->db->from('page');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}
	function getFormulir2()
	{
		$this->db->select('*');
		$this->db->where('page_id', 9);
		$this->db->from('page');
		
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;
	}



	function getDataInformasi($limit,$offset,$cari,$jenis)
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


	
	
	public function getCountDataInformasi($cari,$Jenis) 
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
	
	function getDataDetailInformasi($id)
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

	function getDataPejabat($limit,$offset,$cari,$jenis)
	{
		$jenis = 1;
		$this->db->select('*');
		$this->db->from('pejabat');

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;


		
	}


	function getDataLhkpn($limit,$offset,$cari,$jenis)
	{
		$jenis = 1;
		$this->db->select('*');
		$this->db->where('lhkpn_pejabat_id', $jenis);
		$this->db->order_by('lhkpn_last_update','desc');
		$this->db->from('lhkpn');
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$data[]= $row;
			}
			return $data;



		// $jenis = 1;
		// $this->db->select('*');
		// $this->db->select("DATE_FORMAT(lhkpn_last_update, '%d %M %Y')as tgl", false);
		// $this->db->where('lhkpn_pejabat_id', $jenis);
		

		// if ($cari != '') {
		// 	$this->db->like('LOWER(lhkpn_tahun)', strtolower($cari));
		// }
		
		// $this->db->from('lhkpn');
		// $this->db->order_by('lhkpn_last_update','desc');
		// $this->db->limit($limit, $offset);
		// $query = $this->db->get();
		
		// if ($query->num_rows() > 0) {
		// 	foreach ($query->result() as $row) {
		// 		$data[] = $row;
		// 	}
		// 	return $data;
		// }
		// return false;
	}

	public function getCountDataPejabat($cari,$Jenis) 
	{
		$this->db->select('*');
		$this->db->where('pejabat_jabatan', $Jenis);
		
		if ($cari != '') {
			$this->db->like('LOWER(pejabat_name)', strtolower($cari));
		}
		
		$this->db->from('pejabat');
		$query = $this->db->get();

		return count($query->result());
	}
	
	
}
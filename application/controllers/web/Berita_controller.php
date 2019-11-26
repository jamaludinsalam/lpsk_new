<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
		parent::__construct();
		$this->load->helpers('text');
		$this->load->model('Berita_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function persrelease()
	{
		$this->template->set_title('Pers Release LPSK');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("berita/persrelease");
		$total_rows = $this->Berita_model->getCountDataBerita($cari,7);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menuberita'] = 'active';
		$this->data['persrelease'] = 'active';
		$this->data['wartahukum'] = '';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Berita</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Pers Release LPSK</a></li>';
		$this->data['data'] = $this->Berita_model->getDataBerita($config["per_page"],$page,$cari,5);
		// $this->data['data'] = $this->Berita_model->getDataBeritaLimiter($config["per_page"],$page,$cari,5);
		// $string = $this->Berita_model->getDataBeritaLimiter($config["per_page"],$page,$cari,5);
		// $hasil = str_replace($string, $string, $string);
		// $limit = 4;
		// $limiter = character_limiter($hasil, 25);
		// if(stripos($string, " "))
		// {
		// 	$ex_str = explode(" ", $string);
		// 	if(count($ex_str) > $limit)
		// 	{
		// 		for($i = 0; $i < $limit; $i++)
		// 		{
		// 			$str_s .= $ex_str[$i] . " ";
		// 		}
		// 		return $str_s . "&hellip;";
		// 	}
		// 	else 
		// 	{
		// 		return $str;
		// 	}
		// }
		// print_r($this->data);
		// die();
		$this->template->contentberita('berita/persrelease', $this->data);
	}
	

	
	public function detailpersrelease($id=0)
	{
		$this->template->set_title('Pers Release');
	
		$url = base_url("berita/detailpersrelease");
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menuberita'] = 'active';
		$this->data['persrelease'] = 'active';
		$this->data['wartahukum'] = '';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Berita</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> pers Release</a></li>';
		$this->data['data'] = $this->Berita_model->getDataDetailBerita($id);

		$this->template->contentberita('berita/detailpersrelease', $this->data);
	}

	public function wartahukum()
	{
		$this->template->set_title('Warta Hukum LPSK');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("berita/wartahukum");
		$total_rows = $this->Berita_model->getCountDataBerita($cari,6);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menuberita'] = 'active';
		$this->data['persrelease'] = '';
		$this->data['wartahukum'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Berita</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Warta Hukum LPSK</a></li>';
		$this->data['data'] = $this->Berita_model->getDataBerita($config["per_page"],$page,$cari,6);
		
		$this->template->contentberita('berita/wartahukum', $this->data);
	}

	public function detailwartahukum($id=0)
	{
		$this->template->set_title('Warta Hukum');
	
		$url = base_url("berita/detailwartahukum");
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menuberita'] = 'active';
		$this->data['wartahukum'] = 'active';
		$this->data['persrelease'] = '';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Berita</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Warta Hukum </a></li>';
		$this->data['data'] = $this->Berita_model->getDataDetailBerita($id);

		$this->template->contentberita('berita/detailwartahukum', $this->data);
	}
	
	
}
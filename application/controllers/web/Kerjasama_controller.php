<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerjasama_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Kerjasama_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		
		$data['menuperaturan'] = 'active';
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function aparat()
	{
		$this->template->set_title('Instansi Aparat Penegak Hukum');
		
		$cari='';
		$jenis = 1;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("kerjasama/aparat");
		$total_rows = $this->Kerjasama_model->getCountDataKerjasama($cari,1);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuberita'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukerjasama'] = 'active';
		$this->data['aparat'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Instansi Aparat Penegak Hukum</a></li>';
		$this->data['data'] = $this->Kerjasama_model->getDataKerjasama($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentkerjasama('kerjasama/aparat', $this->data);
	}


	public function umum()
	{
		$this->template->set_title('Instansi Umum');
		
		$cari='';
		$jenis = 2;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("kerjasama/umum");
		$total_rows = $this->Kerjasama_model->getCountDataKerjasama($cari,2);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuberita'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukerjasama'] = 'active';
		$this->data['umum'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Instansi Umum</a></li>';
		$this->data['data'] = $this->Kerjasama_model->getDataKerjasama($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentkerjasama('kerjasama/umum', $this->data);
	}


	public function internasional()
	{
		$this->template->set_title('Instansi Internasional');
		
		$cari='';
		$jenis = 3;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("kerjasama/internasional");
		$total_rows = $this->Kerjasama_model->getCountDataKerjasama($cari,3);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuberita'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukerjasama'] = 'active';
		$this->data['internasional'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Instansi Internasional</a></li>';
		$this->data['data'] = $this->Kerjasama_model->getDataKerjasama($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentkerjasama('kerjasama/internasional', $this->data);
	}


	public function kesehatan()
	{
		$this->template->set_title('Instansi Kesehatan');
		
		$cari='';
		$jenis = 4;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("kerjasama/kesehatan");
		$total_rows = $this->Kerjasama_model->getCountDataKerjasama($cari,4);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuberita'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukerjasama'] = 'active';
		$this->data['kesehatan'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Instansi Kesehatan</a></li>';
		$this->data['data'] = $this->Kerjasama_model->getDataKerjasama($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentkerjasama('kerjasama/kesehatan', $this->data);
	}


	public function pendidikan()
	{
		$this->template->set_title('Instansi Pendidikan');
		
		$cari='';
		$jenis = 5;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("kerjasama/pendidikan");
		$total_rows = $this->Kerjasama_model->getCountDataKerjasama($cari,5);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuberita'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukerjasama'] = 'active';
		$this->data['pendidikan'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Instansi Pendidikan</a></li>';
		$this->data['data'] = $this->Kerjasama_model->getDataKerjasama($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentkerjasama('kerjasama/pendidikan', $this->data);
	}


	public function lsm()
	{
		$this->template->set_title('Instansi LSM / Pers');
		
		$cari='';
		$jenis = 6;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("kerjasama/lsm");
		$total_rows = $this->Kerjasama_model->getCountDataKerjasama($cari,6);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuberita'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukerjasama'] = 'active';
		$this->data['lsm'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Instansi LSM / Pers</a></li>';
		$this->data['data'] = $this->Kerjasama_model->getDataKerjasama($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentkerjasama('kerjasama/lsm', $this->data);
	}


	


	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Peraturan_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		
		$data['menuperaturan'] = 'active';
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function uuterkait()
	{
		$this->template->set_title('Undang Undang Terkait');
		
		$cari='';
		$jenis = 1;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/buku");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['uuterkait'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Undang Undang Terkait</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/uuterkait', $this->data);
	}


	public function pemerintah()
	{
		$this->template->set_title('Peraturan Pemerintah');
		
		$cari='';
		$jenis = 2;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/pemerintah");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['pemerintah'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan Pemerintah</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/pemerintah', $this->data);
	}


	public function presiden()
	{
		$this->template->set_title('Peraturan Presiden');
		
		$cari='';
		$jenis = 3;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/presiden");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['presiden'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan Presiden</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/presiden', $this->data);
	}


	public function perma()
	{
		$this->template->set_title('Peraturan Mahkamah Agung');
		
		$cari='';
		$jenis = 4;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/perma");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['perma'] = 'active';
		$this->data['links'] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan Mahkamah Agung</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/perma', $this->data);
	}


	public function lain()
	{
		$this->template->set_title('Peraturan Lain');
		
		$cari='';
		$jenis = 5;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/lain");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['lain'] = 'active';
		$this->data['links'] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan Lain</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/lain', $this->data);
	}


	public function lpsk()
	{
		$this->template->set_title('Peraturan LPSK');
		
		$cari='';
		$jenis = 6;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/lpsk");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['lpsk'] = 'active';
		$this->data['links'] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan LPSK</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/lpsk', $this->data);
	}


	public function ketualpsk()
	{
		$this->template->set_title('Peraturan dan Keputusan Ketua LPSK');
		
		$cari='';
		$jenis = 7;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/ketualpsk");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['ketualpsk'] = 'active';
		$this->data['links'] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan dan Keputusan Ketua LPSK</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/ketualpsk', $this->data);
	}


	public function sekjenlpsk()
	{
		$this->template->set_title('Peraturan dan Keputusan Sekjen LPSK');
		
		$cari='';
		$jenis = 8;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/sekjenlpsk");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['sekjenlpsk'] = 'active';
		$this->data['links'] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan dan Keputusan Sekjen LPSK</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/sekjenlpsk', $this->data);
	}


	public function kodeetik()
	{
		$this->template->set_title('Peraturan Kode Etik');
		
		$cari='';
		$jenis = 9;
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("peraturan/kodeetik");
		$total_rows = $this->Peraturan_model->getCountDataPeraturan($cari,7);
		$config = $this->pagination_model->initPagination3($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuperaturan'] = 'active';
		$this->data['kodeetik'] = 'active';
		$this->data['links'] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Peraturan</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Peraturan Kode Etik</a></li>';
		$this->data['data'] = $this->Peraturan_model->getDataPeraturan($config["per_page"],$page,$cari,$jenis);
		// print_r($this->data);
		// die();
		$this->template->contentperaturan('peraturan/kodeetik', $this->data);
	}
}
	


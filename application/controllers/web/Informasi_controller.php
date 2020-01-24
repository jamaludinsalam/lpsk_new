<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Informasi_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function informasipublik()
	{
		$this->template->set_title('Informasi Publik');
		
		$id=1;
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['informasi'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Tentang Informasi Publik</a></li>';
		$this->data['data'] = $this->Informasi_model->getInformasiPublik();
		// print_r($this->data);
		// die();
		$this->template->contentinformasi('informasi/informasipublik', $this->data);
	}

	public function pedoman()
	{
		$this->template->set_title('Informasi Publik');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['pedoman'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Pedoman Pengelolaan Informasi Publik</a></li>';
		$this->data['data'] = $this->Informasi_model->getPedoman();
		// print_r($this->data);
		// die();
		$this->template->contentinformasi('informasi/pedoman', $this->data);
	}

	public function standar()
	{
		$this->template->set_title('Standar Pelayanan Informasi Publik');
	
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['standar'] = 'active';

		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Standar Pelayanan Informasi Publik</a></li>';
		$this->data['data'] = $this->Informasi_model->getStandar();	
		// print_r($this->data);
		// die();
		$this->template->contentinformasi('informasi/standar', $this->data);
	}

	public function struktur()
	{
		$this->template->set_title('Struktur PPID');
	
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['struktur'] = 'active';

		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Struktur PPID </a></li>';
		$this->data['data'] = $this->Informasi_model->getStruktur();	
		// print_r($this->data);
		// die();
		$this->template->contentinformasi('informasi/struktur', $this->data);
	}

	public function formulir()
	{
		$this->template->set_title('Struktur PPID');
	
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['formulir'] = 'active';

		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Formulir Informasi Publik</a></li>';
		$this->data['data1'] = $this->Informasi_model->getFormulir1();
		$this->data['data2'] = $this->Informasi_model->getFormulir2();
		// print_r($this->data);
		// die();
		$this->template->contentinformasi('informasi/formulir', $this->data);
	}


	public function lhkpn()
	{

		

		$this->template->set_title('LHKPN LPSK');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("informasi/lhkpn");
		$total_rows = $this->Informasi_model->getCountDataPejabat($cari,1);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['menupublikasi'] = '';
		$this->data['lhkpn'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
										<li class="breadcrumb-item"><a href="#">Informasi</a></li>
										<li class="breadcrumb-item" aria-current="page"><a href="">LHKPN LPSK</a></li>';

		$this->data['data'] = $this->Informasi_model->getDataPejabat($config["per_page"],$page,$cari,1);
		$this->data['lhkpn'] = $this->Informasi_model->getDataLhkpn($config["per_page"],$page,$cari,1);

		$this->template->contentinformasi('informasi/lhkpn', $this->data);







		
		// print_r($this->data);
		// die();
		
	}

	public function pengaduan()
	{
		$this->template->set_title('Pengaduan Masyarakat');
	
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = 'active';
		$this->data['pengaduan'] = 'active';

		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Informasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Pengaduan Masyarakat</a></li>';
		
		// print_r($this->data);
		// die();
		$this->template->contentinformasi('informasi/pengaduan', $this->data);
	}


	
	

	
	

	
	
}
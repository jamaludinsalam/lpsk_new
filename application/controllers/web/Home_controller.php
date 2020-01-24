<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
		parent::__construct();
		$this->load->helpers('text');
		$this->load->model('Berita_model');
		$this->load->model('Home_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$this->template->set_title('Home LPSK');
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuberita'] = '';
		$this->data['menuhome'] = 'active';
		$this->data['data'] = $this->Home_model->getBerita();
		
		$cData = $this->Home_model->getStatistik();
		$this->data['ctx'] = json_encode($cData);
	

		$this->template->contenthome('home',$this->data);

		// print_r($this->data);
		// die();
	}

	public function subjek()
	{
		$this->template->set_title('Subjek Perlindungan');
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuhome'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Home</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Subjek Perlindungan</a></li>';
		$this->template->contentsubjek('subjek/subjekperlindungan', $this->data);
	}

	public function prioritas()
	{
		$this->template->set_title('Kasus Prioritas');
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuhome'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Home</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Kasus Prioritas</a></li>';
		$this->template->contentsubjek('subjek/kasusprioritas', $this->data);
	}

	public function perlindungan()
	{
		$this->template->set_title('Program Perlindungan');
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuhome'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Home</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Program Perlindungan</a></li>';
		$this->template->contentsubjek('subjek/programperlindungan', $this->data);
	}

	public function permohonan()
	{
		$this->template->set_title('Cara Mengajukan Permohonan');
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuhome'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Home</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Cara Mengajukan Permohonan</a></li>';
		$this->template->contentsubjek('subjek/permohonan', $this->data);
	}
	
	
}
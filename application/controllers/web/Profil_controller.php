<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Profil_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function sekilaslpsk()
	{
		$this->template->set_title('Sekilas LPSK');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['sekilaslpsk'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Sekilas LPSK</a></li>';
		$this->data['data'] = $this->Profil_model->getSekilas();
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/sekilaslpsk', $this->data);
	}

	public function struktur()
	{
		$this->template->set_title('Struktur Organisasi');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['struktur'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Struktur Organisasi</a></li>';
		$this->data['data'] = $this->Profil_model->getStruktur();
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/struktur', $this->data);
	}

	public function pejabat()
	{
		$this->template->set_title('Pejabat Struktural');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['pejabat'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Pejabat Struktural</a></li>';
		
		$this->data['data'] = $this->Profil_model->getPejabat();
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/pejabat', $this->data);
	}
	public function pejabatdetail($id=0)
	{
		$this->template->set_title('Pejabat Struktural');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['pejabat'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Pejabat Struktural</a></li>';
		$this->data['data'] = $this->Profil_model->getPejabatDetail($id);
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/pejabatdetail', $this->data);
	}

	public function pimpinan()
	{
		$this->template->set_title('Profil Pimpinan');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['pimpinan'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Profil Pimpinan</a></li>';
		
		$this->data['data'] = $this->Profil_model->getPimpinan();
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/pimpinan', $this->data);
	}
	public function pimpinandetail($id=0)
	{
		$this->template->set_title('Profil Pimpinan');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['pimpinan'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Profil Pimpinan LPSK</a></li>';
		$this->data['data'] = $this->Profil_model->getPimpinanDetail($id);
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/pimpinandetail', $this->data);
	}


	public function roadmap()
	{
		$this->template->set_title('Road Map dan Rencana Strategis');
		
		
		
		
		$this->data['menupublikasi'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menukontakkami'] = '';
		$this->data['menukerjasama'] = '';
		$this->data['menuinformasi'] = '';
		$this->data['menuprofil'] = 'active';
		$this->data['roadmap'] = 'active';
		
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Road Map dan Rencana Strategis</a></li>';
		$this->data['data'] = $this->Profil_model->getRoadmap();
		// print_r($this->data);
		// die();
		$this->template->contentprofil('profil/roadmap', $this->data);
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
									<li class="breadcrumb-item"><a href="#">Profil</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href="">Road Map dan Rencana Strategis</a></li>';
		$this->template->contentsubjek('subjek/subjekperlindungan', $this->data);
	}

	
	
}
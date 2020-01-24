<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakkami_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Kontakkami_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function kontakkami()
	{
		$this->template->set_title('Kontak Kami');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		
		$this->data['menuberita'] = '';
		$this->data['menuperaturan'] = '';
		$this->data['menupublikasi'] = '';
		$this->data['kontakkami'] = 'active';
		$this->data['menukontakkami'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Kontak Kami</a></li>';
		
		$this->template->contentkontak('kontakkami', $this->data);
	}
	
	
}
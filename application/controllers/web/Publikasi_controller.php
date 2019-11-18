<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	
	public $jenis;
	
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Publikasi_model');
		$this->load->model('pagination_model');
		$this->load->library('pagination');
    }
	
	public function index()
	{
		$data['menupublikasi'] = 'active';
		$this->template->content('',$data);
	}
	
	public function buku()
	{
		$this->template->set_title('Buku LPSK');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/buku");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,7);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasibuku'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Buku</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,7);

		$this->template->content('buku', $this->data);
	}
	
	public function detailbuku($id=0)
	{
		$this->template->set_title('Buku');
	
		$url = base_url("publikasi/detailbuku");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasibuku'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Buku</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('bukudetail', $this->data);
	}
	
	public function buletin()
	{
		$this->template->set_title('Buletin');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/buletin");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,8);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasibuletin'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Buletin</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,8);

		$this->template->content('buletin', $this->data);
	}
	
	public function detailbuletin($id=0)
	{
		$this->template->set_title('Buletin');
	
		$url = base_url("publikasi/detailbuletin");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasibuletin'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Buletin</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('buletindetail', $this->data);
	}
	
	public function jurnal()
	{
		$this->template->set_title('Jurnal');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/jurnal");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,9);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasijurnal'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Jurnal</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,9);

		$this->template->content('jurnal', $this->data);
	}
	
	public function detailjurnal($id=0)
	{
		$this->template->set_title('Jurnal');
	
		$url = base_url("publikasi/detailjurnal");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasijurnal'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Jurnal</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('jurnaldetail', $this->data);
	}
	
	public function artikel()
	{
		$this->template->set_title('Artikel');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/artikel");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,10);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasiartikel'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Artikel</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,10);

		$this->template->content('artikel', $this->data);
	}
	
	public function detailartikel($id=0)
	{
		$this->template->set_title('Artikel');
	
		$url = base_url("publikasi/detailartikel");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasiartikel'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Artikel</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('artikeldetail', $this->data);
	}
	
	public function informasi()
	{
		$this->template->set_title('Informasi');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/informasi");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,3);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasiinformasi'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Informasi</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,3);

		$this->template->content('informasi', $this->data);
	}
	
	public function detailinformasi($id=0)
	{
		$this->template->set_title('Informasi');
	
		$url = base_url("publikasi/detailinformasi");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasiinformasi'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Informasi</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('informasidetail', $this->data);
	}
	
	public function kegiatan()
	{
		$this->template->set_title('Informasi');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/kegiatan");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,12);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasikegiatan'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Kegiatan</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,12);

		$this->template->content('kegiatan', $this->data);
	}
	
	public function detailkegiatan($id=0)
	{
		$this->template->set_title('Kegiatan');
	
		$url = base_url("publikasi/detailkegiatan");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasikegiatan'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Kegiatan</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('kegiatandetail', $this->data);
	}
	
	public function gallery()
	{
		$this->template->set_title('Gallery');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/gallery");
		$total_rows = $this->Publikasi_model->getCountDataGallery($cari);
		$config = $this->pagination_model->initPagination2($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasigallery'] = 'active';
		$this->data['gallery'] = 'gallery';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Gallery</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataGallery($config["per_page"],$page,$cari);

		$this->template->content('gallery', $this->data);
	}
	
	public function video()
	{
		$this->template->set_title('Video');
		
		$cari='';
		
		$cari = "";
		if ($this->input->get('judul') !== null) {
			$cari = $this->input->get('judul');
		}
		
		$url = base_url("publikasi/video");
		$total_rows = $this->Publikasi_model->getCountDataPublikasi($cari,1);
		$config = $this->pagination_model->initPagination($url, $total_rows);
		
		$this->pagination->initialize($config);
		
		$page = 0;
		if ($this->input->get('page') != null) {
			$page = $this->input->get('page');
		}
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasivideo'] = 'active';
		$this->data["links"] = $this->pagination->create_links();
		$this->data['page'] = $page;
		$this->data['cari'] = $cari;
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Video</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataPublikasi($config["per_page"],$page,$cari,1);

		$this->template->content('video', $this->data);
	}
	
	public function detailvideo($id=0)
	{
		$this->template->set_title('Video');
	
		$url = base_url("publikasi/detailvideo");
		
		$this->data['menupublikasi'] = 'active';
		$this->data['publikasivideo'] = 'active';
		$this->data['navigation'] = '<li class="breadcrumb-item"><a href="#"><img src="'.base_url('assets/resources/css/img/home.svg').'" alt=""></a></li>
									<li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                            		<li class="breadcrumb-item" aria-current="page"><a href=""> Video</a></li>';
		$this->data['data'] = $this->Publikasi_model->getDataDetailPublikasi($id);

		$this->template->content('videodetail', $this->data);
	}
}
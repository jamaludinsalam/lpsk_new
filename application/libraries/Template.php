<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Template Library
 */
class Template
{
	protected $_ci;
	protected $_title, $_subtitle;
	protected $_headline;


	function __construct()
	{
		$this->_ci =& get_instance();
		$this->_title = 'Lembaga Perlindungan Saksi dan Korban';
		$this->_subtitle = 'Lembaga Perlindungan Saksi dan Korban';
	}

	function set_title($title = 'Mahkamah Konstitusi Republik Indonesia')
	{
		$this->_title = $title;
	}
	
	function set_subtitle($title = 'Lembaga Perlindungan Saksi dan Korban')
	{
		$this->_subtitle = $title;
	}

	function login($content=null,$data=null)
	{
		if($this->_ci->session->isLoggedIn){
			redirect('home','refresh');
		} else {
			$data['title'] = $this->_title;
			$data['style'] = $content;
			$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);

			$this->_ci->parser->parse('layout/login_template', $data);
		}
	}

	function content_login($content=null, $data=null)
	{
		if($this->_ci->session->isLoggedIn){
			$this->_ci->load->model('user_model');
			$user = $this->_ci->user_model->getUser($this->_ci->session->id_login);
			$menu = $this->_ci->uri->segment(2);
			$cek = count($this->_ci->uri->segment_array());
			if($cek == 1) $data['dashboard'] = 'active';
			$data[$menu] = 'active';
			$data['foto'] = $user['foto'];
			$data['title'] = $this->_title;
			$data['subtitle'] = $this->_subtitle;
			$data['sidebar'] = $this->_ci->parser->parse('layout/menu_sidebar', $data, true);
			$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
			$this->_ci->parser->parse('layout/main_template2', $data);
		} else {
			redirect('login','refresh');
		}
	}
	
	function content($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template', $data);
		
	}
	function contenthome($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu_home', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_home', $data);
		
	}
	function contentperaturan($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_peraturan', $data);
		
	}
	function contentberita($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_berita', $data);
		
	}
	function contentinformasi($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_informasi', $data);
		
	}
	function contentkerjasama($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_kerjasama', $data);
		
	}
	function contentkontak($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_kontak', $data);
		
	}
	function contentprofil($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_profil', $data);
		
	}
	function contentsubjek($content=null, $data=null)
	{
		$data['title'] = $this->_title;
		$data['menu'] = $this->_ci->parser->parse('layout/menu', $data, true);
		$data['sidebar'] = $this->_ci->parser->parse('layout/menu_konten', $data, true);
		$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
		$data['footer'] = $this->_ci->parser->parse('layout/footer', $data, true);
		$this->_ci->parser->parse('layout/konten_template_subjek', $data);
		
	}
	
	function content_blank($content=null, $data=null)
	{
		if($this->_ci->session->isLoggedIn){
			$this->_ci->load->model('user_model');
			$user = $this->_ci->user_model->getUser($this->_ci->session->id_login);
			$data['foto'] = $user['foto'];
			$data['title'] = $this->_title;
			$data['subtitle'] = $this->_subtitle;
			//$data['sidebar'] = $this->_ci->parser->parse('layout/menu_sidebar', $data, true);
			$data['_content'] = $this->_ci->parser->parse('web/'.$content, $data, true);
			$this->_ci->parser->parse('layout/main_template_blank', $data);
		} else {
			redirect('login','refresh');
		}
	}
}
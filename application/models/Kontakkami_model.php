<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakkami_model extends CI_Model 
{
	public function __construct()
    {
		parent::__construct();
		$this->load->database();
		//$this->db2 = $this->load->database('websitemk',true);
    }
	
	
}
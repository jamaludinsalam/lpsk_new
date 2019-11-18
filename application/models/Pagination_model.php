<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_model extends CI_Model {

	public function initPagination($url,$total_rows)
	{
		$config = array();
		$config["base_url"] = $url;
		$config["total_rows"] = $total_rows;
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		// $config['num_links'] = 4;
		$config['page_query_string'] = TRUE;
		// $config['use_page_numbers'] = TRUE;
		$config['reuse_query_string'] = true;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul><!--pagination-->';
		$config['first_link'] = '<span class="fa fa-angle-double-left"></span> First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last <span class="fa fa-angle-double-right"></span>';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '<span class="fa fa-chevron-right "></span>';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '<span class="fa fa-chevron-left"></span>';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		// $config['display_pages'] = FALSE;
		$config['anchor_class'] = 'follow_link';

		return $config;    
	}
	
	public function initPagination2($url,$total_rows)
	{
		$config = array();
		$config["base_url"] = $url;
		$config["total_rows"] = $total_rows;
		$config["per_page"] = 8;
		$config["uri_segment"] = 3;
		// $config['num_links'] = 4;
		$config['page_query_string'] = TRUE;
		// $config['use_page_numbers'] = TRUE;
		$config['reuse_query_string'] = true;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul><!--pagination-->';
		$config['first_link'] = '<span class="fa fa-angle-double-left"></span> First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last <span class="fa fa-angle-double-right"></span>';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '<span class="fa fa-chevron-right "></span>';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '<span class="fa fa-chevron-left"></span>';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		// $config['display_pages'] = FALSE;
		$config['anchor_class'] = 'follow_link';

		return $config;    
	}
}
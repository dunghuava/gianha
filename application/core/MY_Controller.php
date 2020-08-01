<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data=null;
	
	public function __construct()
	{
		parent::__construct();
	}
	public function view($path,$data=null){
		$this->load->view($path, $data);
	}
	public function page($path,$data=null)
	{
		$data['path']=$path;
		$data['data']=$data;
		$this->load->view('admin/content_wrapper',$data);
	}
	public function get_page_header($data=null){
		$this->load->view('web/header', $data);
		$this->load->view('web/nav', $data);
	}
	public function get_page($path,$data=null){
		$this->load->view('web/'.$path, $data);
	}	
	public function get_page_footer($data=null){
		$this->load->view('web/footer', $data);
	}
	public function get_admin_header($data=null){
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sibar');
		$this->load->view('admin/nav');
	}
	public function get_admin_footer($data=null){
		$this->load->view('admin/footer', $data);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/libraries/MY_Controller.php */
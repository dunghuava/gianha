<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto extends MY_Controller {

	public function index()
	{
		$this->get_page_header();
		$this->get_page('web/home/home');
		$this->get_page_footer();
	}

}

/* End of file Auto.php */
/* Location: ./application/controllers/Auto.php */
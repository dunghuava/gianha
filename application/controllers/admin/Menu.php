<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends MY_Controller {

public function __construct()
{
	parent::__construct();	
}
	public function index()
	{
		$this->get_admin_header();
		$this->page('menu/menu',$this->data);
		$this->get_admin_footer();
	}

}

/* End of file Dasboard.php */
/* Location: ./application/controllers/admin/Dasboard.php */
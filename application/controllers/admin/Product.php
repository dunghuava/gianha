<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Project_M');
		$this->load->model('Category_M');
		$this->load->model('Province_M');
	}

	public function index()
	{
		$this->get_admin_header();
		$this->page('products/product');
		$this->get_admin_footer();
	}

	public function add()
	{
		$this->get_admin_header();
		$arr_category = $this->Category_M->find(['04_parent_id'=>0]);
		$list_province = $this->Province_M->all();
		$this->data['page_name'] = 'Thêm dự án';
		$this->data['arr_category'] = $arr_category;
		$this->page('products/add_product',$this->data);
		$this->get_admin_footer();
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/admin/Product.php */
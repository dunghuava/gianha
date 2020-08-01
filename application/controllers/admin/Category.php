<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

public function __construct()
{
	parent::__construct();	
	$this->load->model('Category_M');
	$this->load->model('Module_M');
	
}
	public function index()
	{
		$this->get_admin_header();
		$this->data['arr_category']=$this->Category_M->all(['04_index'=>'asc']);
		$this->data['page_name']='Danh mục';
		$this->page('category/category',$this->data);
		$this->get_admin_footer();
	}
	public function add()
	{
		if ($this->input->post()){
			$data_post = $this->input->post();
			$data_post['04_alias']	=make_alias($data_post['04_name']);
			$data_post['04_active']	=$data_post['04_active']=='on' ? 1:0;
			$this->Category_M->insert($data_post);
			
			redirect(base_url('admin/category'),'location');
			
		}
		$this->get_admin_header();
		$this->data['page_name']='Thêm danh mục';
		$this->data['arr_module']=$this->Module_M->all();
		$this->data['arr_category']=$this->Category_M->find(['04_parent_id'=>0]);
		$this->page('category/category_add',$this->data);
		$this->get_admin_footer();
	}
	public function edit($id=0)
	{
		if ($this->input->post()){
			$data_post = $this->input->post();
			$data_post['04_alias']	=make_alias($data_post['04_name']);
			$data_post['04_active']	=$data_post['04_active']=='on' ? 1:0;
			$this->Category_M->update(['04_id'=>$data_post['04_id']],$data_post);
			redirect(base_url('admin/category'),'location');
		}
		$this->get_admin_header();
		$this->data['page_name']='Sửa danh mục';
		$this->data['cate']=$this->Category_M->find(['04_id'=>$id])[0];
		$this->data['arr_module']=$this->Module_M->all();
		$this->data['arr_category']=$this->Category_M->find(['04_parent_id'=>0]);
		$this->page('category/category_add',$this->data);
		$this->get_admin_footer();
	}
	public function delete(){
		$id = $this->input->post('04_id');
		$this->Category_M->delete(['04_id'=>$id]);
	}
	public function setindex(){
		$id = $this->input->post('04_id');
		$index = $this->input->post('04_index');
		$this->Category_M->update(['04_id'=>$id],['04_index'=>$index]);
	}
	public function setactive(){
		$id = $this->input->post('04_id');
		$active = $this->input->post('04_active');
		$this->Category_M->update(['04_id'=>$id],['04_active'=>$active]);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */
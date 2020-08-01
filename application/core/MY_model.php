<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_model extends CI_Model {
	protected $table ='table';

	public function all(){
		return $this->db->get($this->table)->result_array();
	}
	public function find($where=array()){
		return $this->db->where($where)->get($this->table)->result_array();
	}

	public function find_row($where=array()){
		return $this->db->where($where)->get($this->table)->row_array();
	}

	public function insert($data){
		return $this->db->insert($this->table,$data);
	}
	public function delete($where=array()){
		return $this->db->where($where)->delete($this->table);
	}
	public function update($where=array(),$data=array()){
		return $this->db->where($where)->update($this->table,$data);
	}
	public function last_id(){
		return $this->db->insert_id();
	}
	public function last_query(){
		return $this->db->last_query();
	}
}

/* End of file MY_model.php */
/* Location: ./application/libraries/MY_model.php */
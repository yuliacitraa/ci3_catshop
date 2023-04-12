<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories035_model extends CI_Model {

	public function create()
	{
		$data = array (
            'category_name_035'          => $this-> input->post('category_name_035'), 
            'category_description_035'   => $this-> input->post('category_description_035')
        );
        $this->db->insert('categories035', $data);
	}

	public function read() {
		$query=$this->db->get('categories035');
        return $query->result();
	}

	public function read_by($id) {
        $this->db->where('category_id_035',$id);
        $query=$this->db->get('categories035');
        return $query->row();
    }

    public function update($id) {
        $data = array (
            'category_name_035'  		 => $this-> input->post('category_name_035'), 
            'category_description_035'   => $this-> input->post('category_description_035')
        );
        $this->db->where('category_id_035',$id);
        $this->db->update('categories035', $data);
    }

    public function delete($id) {
        $this->db->where('category_id_035',$id);
        $this->db->delete('categories035');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users035_model extends CI_Model {

	public function create() {
		$data = array (
            'username_035'   => $this-> input->post('username_035'), 
            'usertype_035'   => $this-> input->post('usertype_035'), 
            'fullname_035'   => $this-> input->post('fullname_035'),
            'password_035'   => password_hash ($this-> input->post('usertype_035'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users035', $data);
	}

	public function read() {
        $query=$this->db->get('users035');
        return $query->result();
    }

    public function read_by($id) {
        $this->db->where('userid_035',$id);
        $query=$this->db->get('users035');
        return $query->row();
    }

    public function update($id) {
        $data = array (
            'username_035'   => $this-> input->post('username_035'), 
            'password_035'   => $this-> input->post('password_035'), 
            'usertype_035'   => $this-> input->post('usertype_035'), 
            'fullname_035'   => $this-> input->post('fullname_035')
        );
        $this->db->where('userid_035',$id);
        $this->db->update('users035', $data);
    }

    public function delete($id) {
        $this->db->where('userid_035',$id);
        $this->db->delete('users035');
    }
}

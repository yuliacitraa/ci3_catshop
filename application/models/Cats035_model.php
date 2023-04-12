<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats035_model extends CI_Model {

	public function create() {
		$data = array (
            'name_035'   => $this-> input->post('name_035'), 
            'type_035'   => $this-> input->post('type_035'), 
            'gender_035' => $this-> input->post('gender_035'), 
            'age_035'    => $this-> input->post('age_035'), 
            'price_035'  => $this-> input->post('price_035')
        );
        $this->db->insert('cats035', $data);
	}

    public function read ($limit, $start) {
        $this->db->limit ($limit, $start);
        $query=$this->db->get('cats035');
        return $query->result();
    }

	// public function read() {
    //     $query=$this->db->get('cats035');
    //     return $query->result();
    // }

    public function read_by($id) {
        $this->db->where('id_035',$id);
        $query=$this->db->get('cats035');
        return $query->row();
    }

    public function update($id) {
        $data = array (
            'name_035'   => $this-> input->post('name_035'), 
            'type_035'   => $this-> input->post('type_035'), 
            'gender_035' => $this-> input->post('gender_035'), 
            'age_035'    => $this-> input->post('age_035'), 
            'price_035'  => $this-> input->post('price_035')
        );
        $this->db->where('id_035',$id);
        $this->db->update('cats035', $data);
    }

    public function delete($id) {
        $this->db->where('id_035',$id);
        $this->db->delete('cats035');
    }

    public function validation() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_035', 'Cat name','required');
        $this->form_validation->set_rules('type_035', 'Cat type','required');
        $this->form_validation->set_rules('gender_035', 'Cat gender','required');
        $this->form_validation->set_rules('age_035', 'Cat age','required');
        $this->form_validation->set_rules('price_035', 'Cat price','required');
        
        if ($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }

    public function sale ($id) {
        $data = array (
            'customer_name_035'   => $this-> input->post('customer_name_035'), 
            'customer_address_035'   => $this-> input->post('customer_address_035'), 
            'customer_phone_035' => $this-> input->post('customer_phone_035'), 
            'cat_id_035' => $id
        );
        $this->db->insert('catsales035', $data);
        $this->db->set('sold_035', '1');
        $this->db->where('id_035',$id);
        $this->db->update('cats035', $sold);
    }
    
    public function sales() {
        $query=$this->db->get('catsales035');
        return $query->result();
    }
}

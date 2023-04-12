<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users035 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('username')) redirect('auth035/login');
		if($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$this->load->model('Users035_model');

	}

	public function index() {
		$data['users']=$this->Users035_model->read();
		$this->load->view('users035/user_list_035', $data);
	}

	public function add() {
		if($this->input->post('submit')) {
			$this->Users035_model->create();
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> add succesed! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> update failed! </p>');
			}
			redirect('users035');
		}
		$this->load->view('users035/user_form_035');
	}

	public function edit($id) {
		if($this->input->post('submit')) {
			$this->Users035_model->update($id);
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> update succesed! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> update failed! </p>');
			}
			redirect('users035');
		}

		$data['users']=$this->Users035_model->read_by($id);
		$this->load->view('users035/user_form_035', $data);
	}

	public function delete($id) {
		$this->Users035_model->delete($id);
		if ($this->db->affected_rows()>0) {
			$this->session->set_flashdata('msg', '<p style="color:green"> delete succesed! </p>');
		} else {
			$this->session->set_flashdata('msg', '<p style="color:red"> delete failed! </p>');
		}
		redirect('users035');
	}

	public function reset($type)
    {
        $this->users035_model->reset($type);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','<p  style="color:green">Password Succesfully Reseted</p>');
		}else{
			$this->session->set_flashdata('msg','<p  style="color:red">Password reset failed</p>');
		}
		redirect('Users035');
    }
}

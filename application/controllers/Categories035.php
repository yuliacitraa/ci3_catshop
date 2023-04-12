<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories035 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth035/login');
		$this->load->model('Categories035_model');

	}

	public function index()
	{
		$data['categories']=$this->Categories035_model->read();
		$this->load->view('categories/category_list', $data);
	}

	public function add() {
		if($this->input->post('submit')) {
			$this->Categories035_model->create();
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> add succesed! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> update failed! </p>');
			}
			redirect('categories035');
		}
		$this->load->view('categories/category_form');
	}

	public function edit($id) {
		if($this->input->post('submit')) {
			$this->Categories035_model->update($id);
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> update succesed! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> update failed! </p>');
			}
			redirect('categories035');
		}

		$data['category']=$this->Categories035_model->read_by($id);
		$this->load->view('categories/category_form', $data);
	}

	public function delete($id) {
		$this->Categories035_model->delete($id);
		if ($this->db->affected_rows()>0) {
			$this->session->set_flashdata('msg', '<p style="color:green"> delete succesed! </p>');
		} else {
			$this->session->set_flashdata('msg', '<p style="color:red"> delete failed! </p>');
		}
		redirect('categories035');
	}
}

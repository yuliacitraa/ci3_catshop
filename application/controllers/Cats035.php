<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats035 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth035/login');
		$this->load->model('Cats035_model');
		$this->load->model('Categories035_model');
		$this->load->library('form_validation');

	}

	public function index() {
		$this->load->library('pagination');

		$config['base_url'] = site_url('cats035/index');
		$config['total_rows'] = $this->db->count_all ('cats035');
		$config['per_page'] = 5;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_link'] = '<div class="page-link">First</div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = '<div class="page-link">Last</div>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_link'] = '<div class="page-link">Previous</div>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '<div class="page-link">Next</div>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$limit=$config['per_page'];
		$start=$this->uri->segment(3)?$this->uri->segment(3):0;

		$data['i'] = $start+1;
		$data['cats'] = $this->Cats035_model->read($limit, $start);
		$this->load->view('cats035/cat_list_035', $data);
		// $data['cats']=$this->Cats035_model->read();
		// $this->load->view('cats035/cat_list_035', $data);
	}

	public function add() {
		if($this->input->post('submit')) {
			$this->Cats035_model->create();
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> add succesed! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> update failed! </p>');
			}
			redirect('cats035');
		}
		$data['category']=$this->Categories035_model->read();
		$this->load->view('cats035/cat_form_035', $data);
	}

	public function edit($id) {
		if($this->input->post('submit')) {
			$this->Cats035_model->update($id);
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> update succesed! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> update failed! </p>');
			}
			redirect('cats035');
		}
		$data['category']=$this->Categories035_model->read();
		$data['cat']=$this->Cats035_model->read_by($id);
		$this->load->view('cats035/cat_form_035', $data);
	}

	public function delete($id) {
		$this->Cats035_model->delete($id);
		if ($this->db->affected_rows()>0) {
			$this->session->set_flashdata('msg', '<p style="color:green"> delete succesed! </p>');
		} else {
			$this->session->set_flashdata('msg', '<p style="color:red"> delete failed! </p>');
		}
		redirect('cats035');
	}

	public function sale ($id)  {
		if($this->input->post('submit')) {
			$this->Cats035_model->sale($id);
			if ($this->db->affected_rows()>0) {
				$this->session->set_flashdata('msg', '<p style="color:green"> sold! </p>');
			} else {
				$this->session->set_flashdata('msg', '<p style="color:red"> failed! </p>');
			}
			redirect('cats035');
		}
		$data['cat']=$this->Cats035_model->read_by($id);
		$this->load->view('cats035/cat_sale_035', $data);
	}

	public function sales() {
		if($this->session->userdata('usertype') != 'Manager') redirect('welcome');
		$data['sales']=$this->Cats035_model->sales();
		$this->load->view('cats035/sale_list_035', $data);
	}
}

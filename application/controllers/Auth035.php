<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth035 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth035_model');
    }

    public function login()
    {
        if($this->input->post('login') && $this->validation('login')) {
            $login=$this->auth035_model->getuser($this->input->post('username'));
            if($login != NULL) {
                if(password_verify($this->input->post('password'), $login->password_035)) {
                    $data = array (
                        'username' => $login->username_035,
                        'usertype' => $login->usertype_035,
                        'fullname' => $login->fullname_035,
                        'photo'    => $login->photo_035
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');  
                }
            }
            $this->session->set_flashdata('msg','<p style="color:red">Invalid username or password !</p>');
        }
        $this->load->view('auth035/form_login_035');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth035/login');
    }

    public function changepass()
    {
        if(! $this->session->userdata('username')) redirect('auth035/login'); //Filter Login
        if($this->input->post('change') && $this->validation('change')) {
            $change=$this->auth035_model->getuser($this->session->userdata('username'));
            if(password_verify($this->input->post('oldpassword'), $change->password_035)) {
                if($this->auth035_model->changepass())
                    $this->session->set_flashdata('msg','<p style="color:green">Password succesfuly changed !</p>');
                else
                    $this->session->set_flashdata('msg','<p style="color:green">Change Password Failed !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:green">Wrong old password !</p>');
            }
        }
        $this->load->view('auth035/form_password_035');
    }

    public function changephoto() {
        if(! $this->session->userdata('username')) redirect('auth035/login');
        $data['error']='';
        if($this->input->post('upload')) {
            if ($this->upload()) {
                $this->auth035_model->changephoto($this->upload->data('file_name'));
                $this->session->set_userdata('photo', $this->upload->data('file_name'));
                $this->session->set_flashdata('msg','<p style="color:green">photo succesfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();
        }
        $this->load->view('auth035/form_photo_035', $data);
    }
    

    public function upload() {
        $config['upload_path']      = './uploads/users/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 'max';
        $config['max_width']        = 'max';
        $config['max_height']       = 'max';

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }

    public function validation($type)
    {
        $this->load->library('form_validation');

        if($type=='login') {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        }else {
        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        }

        return $this->form_validation->run()?TRUE:FALSE;
    }
}
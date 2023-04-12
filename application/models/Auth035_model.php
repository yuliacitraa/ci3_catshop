<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth035_model extends CI_Model {

    public function getuser($username)
    {
        $this->db->where('username_035',$username);
        return $this->db->get('users035')->row();
    }

    public function changepass()
    {
        $this->db->set('password_035', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_035',$this->session->userdata('username'));
        return $this->db->update('users035');
    }

    public function changephoto($photo) {
        if ($this->session->userdata('photo') !== 'default.png');
            unlink('./uploads/users/'.$this->session->userdata('photo'));
        
        $this->db->set('photo_035', $photo);
        $this->db->where('username_035', $this->session->userdata('username'));
        return $this->db->update('users035');
    } 
}

<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/14/2015
 * Time: 12:35 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addnewuser extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usname', 'Username', 'required|trim|xss_clean|min_length[5]|max_length[12]|callback_username_check');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('phoneno', 'Phone Number', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[admin.email]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('signin');
        } else{
            $this->load->model('addetails');
            $this->addetails->add_newuser();
            $data['success'] ='';
            $this->load->view('signin',$data);
        }
    }

    public function username_check($str)
    {

        $lgnsql = $this->db->query("select username from admin where username= '$str'  ");
        if ($lgnsql->num_rows() > 0)
        {
            $this->form_validation->set_message('username_check', 'This %s already exist');
            return false;
        }
        else
        {

            return true;
        }
    }

}
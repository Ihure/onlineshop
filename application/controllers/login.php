<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/14/2015
 * Time: 2:26 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('lusname', 'Username', 'required|trim|xss_clean|callback_username_check');
        $this->form_validation->set_rules('lpwd', 'Password', 'trim|required|sha1|callback_password_check');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('signin');
        }else{
            $this->load->model('getdetails');
            $data['userdet'] = $this->getdetails->usr_det();
            $this->load->view('admnhome',$data);
        }


    }

    public function password_check($str)
    {
        $username=$this->input->post('lusname');
        $lgnsql = $this->db->query("select username,adminid,password,position,firstname from admin where username= '$username' and position !='1' ");

        if ($lgnsql->num_rows() > 0) {
            $row = $lgnsql->row_array();
            $pswd = $row['password'];
            if ($str != $pswd) {
                $this->form_validation->set_message('password_check', 'The %s does not match the username');
                return FALSE;
            }else
            {
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['userid'] =$row['adminid'];
                //$_SESSION['position']= $row['position'];
                $_SESSION['name']= $row['firstname'];
                //$_SESSION['set']= $row['edited'];
                //$_SESSION['cat'] =$row['category'];
                return TRUE;
            }
        }// if no results
        else {
            $this->form_validation->set_message('password_check', 'Please check your Username');
            return FALSE;
        }

    }
    //validate username
    public function username_check($str)
    {
        $lgnsql = $this->db->query("select username from admin where username= '$str'  ");
        if ($lgnsql->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('username_check', 'This %s does not exist');
            return FALSE;
        }
    }

}
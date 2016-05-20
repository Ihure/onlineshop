<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/16/2015
 * Time: 11:19 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vieworder extends CI_Controller
{

    public function index()
    {
        session_start();
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $data['clients'] = $this->getdetails->get_specorder();
        $data['orders'] = $this->getdetails->get_orderdetails();
        $this->load->view('approveord',$data);

    }

}
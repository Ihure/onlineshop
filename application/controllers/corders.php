<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 2/18/2016
 * Time: 10:49 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class corders extends CI_Controller
{

    public function index()
    {
        session_start();
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $data['orders'] = $this->getdetails->get_orders();
        $this->load->view('admnorders',$data);

    }

}
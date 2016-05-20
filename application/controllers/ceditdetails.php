<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/16/2015
 * Time: 11:19 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ceditdetails extends CI_Controller
{

    public function index()
    {
        session_start();
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $data['item'] = $this->getdetails->get_itemdet();
        $data['sizes'] = $this->getdetails->get_sizedet();
        $this->load->view('edititem',$data);

    }

}
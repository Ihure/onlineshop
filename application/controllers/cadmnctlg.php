<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/16/2015
 * Time: 10:26 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cadmnctlg extends CI_Controller
{

    public function index()
    {
        session_start();
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $data['catalogue'] = $this->getdetails->get_items();
        $this->load->view('admncatalogue',$data);

    }

}
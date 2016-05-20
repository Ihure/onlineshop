<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/26/2015
 * Time: 10:50 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminhm extends CI_Controller {

    public function index()
    {
        session_start();
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $this->load->view('admnhome',$data);
    }

}

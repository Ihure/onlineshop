<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/16/2015
 * Time: 12:38 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updatedetails extends CI_Controller {

    public function index()
    {
        session_start();

        $this->load->model('addetails');
        $this->addetails->update_item();
        $data['update'] ='';
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $data['catalogue'] = $this->getdetails->get_items();
        $this->load->view('admncatalogue',$data);
    }

}
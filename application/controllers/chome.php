<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/17/2015
 * Time: 1:07 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chome extends CI_Controller {

    public function index()
    {
        $this->load->model('getdetails');
        $data['items'] = $this->getdetails->get_hmitems();
        $data['men'] = $this->getdetails->get_men();
        $data['ladies'] = $this->getdetails->get_ladies();
        $data['babies'] = $this->getdetails->get_babies();
        $data['shoes'] = $this->getdetails->get_shoes();

        $this->load->view('home2',$data);

    }
}
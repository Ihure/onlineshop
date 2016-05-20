<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/30/2015
 * Time: 11:58 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class purchase extends CI_Controller
{
    public function index()
    {
        $this->load->model('getdetails');
        $data['items'] = $this->getdetails->get_item();
        $data['sizes'] = $this->getdetails->get_size();

        $this->load->view('item',$data);
    }
}
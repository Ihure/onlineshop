<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/17/2015
 * Time: 1:41 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cproduct extends CI_Controller
{
    public function index()
    {
        if(isset($_GET['ct'])){

            $this->load->model('getdetails');
            $data['products'] = $this->getdetails->get_products();
        }
        else{
            $this->load->model('getdetails');
            $data['products'] = $this->getdetails->get_items();
        }

        $this->load->view('products',$data);
    }
}
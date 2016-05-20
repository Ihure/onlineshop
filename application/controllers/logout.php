<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/16/2015
 * Time: 12:45 PM
 */
class logout extends CI_Controller{

    function index(){
        session_start();
        session_unset();
        $_SESSION=array();
        session_destroy();


        $this->load->model('getdetails');
        $data['items'] = $this->getdetails->get_hmitems();
        $data['men'] = $this->getdetails->get_men();
        $data['ladies'] = $this->getdetails->get_ladies();
        $data['babies'] = $this->getdetails->get_babies();
        $data['shoes'] = $this->getdetails->get_shoes();

        $this->load->view('home');

    }
}
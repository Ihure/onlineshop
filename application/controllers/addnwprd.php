<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/14/2015
 * Time: 3:59 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addnwprd extends CI_Controller {

    public function index()
    {
        if(!is_dir("./prodimg")){
            mkdir("./prodimg",0755,TRUE);

        }
        $path = './prodimg/';
        $logoup=str_replace(' ','_', basename( $_FILES['itemup']['name']));
        $prname = str_replace('','_',$_POST['name']);
        $photo = $path . $prname . $logoup;

        move_uploaded_file($_FILES['itemup']['tmp_name'], $photo);

        $this->load->model('addetails');
        $this->addetails->add_prdct();
        $data['success'] ='';
        $this->load->model('getdetails');
        $data['userdet'] = $this->getdetails->usr_det();
        $data['catalogue'] = $this->getdetails->get_items();
        $this->load->view('admncatalogue',$data);
    }

}
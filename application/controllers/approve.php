<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 2/18/2016
 * Time: 1:41 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class approve extends CI_Controller
{

    public function index()
    {
        session_start();

        $num = $_POST['items'];
        $key = $_POST['itemid'];


        for($start = 1; $start < $num; $start++){

            $id = $_POST['key'.$start];
            $sizeid = $_POST['size'.$start];
            $qty = $_POST['qty'.$start];

            $this->db->set('quantity', 'quantity'.-$qty,false);
            $this->db->where('itemid', $id);
            $this->db->where('autoid', $sizeid);

            $this->db->update('sizes', $this);
        }

        $data = array(
            'ordered' => 1
        );

        $this->db->where('key', $key);
        $this->db->update('client', $data);



        $this->load->model('getdetails');
        $data2['userdet'] = $this->getdetails->usr_det();
        $data2['orders'] = $this->getdetails->get_corders();
        $this->load->view('admncomporders',$data2);

    }

}
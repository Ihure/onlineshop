<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 2/4/2016
 * Time: 12:35 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkout extends CI_Controller
{

    public function index()
    {
        $content = $_POST;
        $grandTotal = 0;
        $item = array();

        for($i=1; $i < $content['itemCount']+1; $i++) {
            $item[]= array(

                    'name' => $content['item_name_'.$i],
                    'quantity' => $content['item_quantity_'.$i],
                    'price' => $content['item_price_'.$i],
                    'id' => $content['item_id_'.$i],
                    'size' => $content['item_size_'.$i],
                    'total' => $content['item_total_'.$i]
        );
        }
        $data['items'] =  $item;
        $this->load->view('sendform',$data);
    }

}
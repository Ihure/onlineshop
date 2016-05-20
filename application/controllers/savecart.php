<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 2/17/2016
 * Time: 10:50 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class savecart extends CI_Controller
{

    public function index()
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $add=$_POST['userMsg'];

        $random = substr( md5(rand()), 0, 5);
        $key = $random.$phone;

        $ono = $_POST['qnumber'];

        $startlp= 1;

        while($startlp <= $ono) {
            if(!isset($_POST['name'.$startlp])){
                $startlp++;
            }else{
                $pname = $_POST['name' . $startlp];
                $qty = $_POST['qty' . $startlp];
                $price = $_POST['price' . $startlp];
                $total = $_POST['total' . $startlp];
                $id = $_POST['id' . $startlp];
                $sizeid = $_POST['sizeid' . $startlp];

                $data = array(
                    'name' =>$pname,
                    'quantity' =>$qty,
                    'price' =>$price,
                    'total' =>$total,
                    'itemid' =>$id,
                    'sizeid' =>$sizeid,
                    'key' =>$key
                );
                $this->db->insert('orders', $data);

                $startlp++;
            }
        }
        $data2 = array(
            'name'=> $name,
            'email'=>$email,
            'phone'=>$phone,
            'address'=>$add,
            'key'=>$key
        );
        $this->db->insert('client', $data2);


        $this->load->view('success');

    }
}
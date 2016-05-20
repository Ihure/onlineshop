<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/14/2015
 * Time: 12:36 PM
 */
class addetails extends CI_Model{

    //new user
    function add_newuser(){
        $this->username = $this->input->post('usname');
        $this->email = $this->input->post('email');
        $this->firstname = $this->input->post('name');
        $this->phoneno = $this->input->post('phoneno');
        $pwd = $this->input->post('pwd');
        $password = sha1($pwd);
        $this->password = $password;

        $this->db->insert('admin', $this);

    }


    //new product
    function add_prdct(){
        session_start();

        $path = '../prodimg/';
        $logoup=str_replace(' ','_', basename( $_FILES['itemup']['name']));
        $prname = str_replace('','_',$_POST['name']);
        $photo = $path . $prname . $logoup;
        $cat = $this->input->post('category');

        $this->photo = $photo;
        $this->category = $this->input->post('category');
        switch($cat){
            case 1:
                $this->type = $this->input->post('mencat');
                break;
            case 2:
                $this->type = $this->input->post('womencat');
                break;
            case 3:
                $this->type = $this->input->post('babcat');
                break;
            case 4:
                $this->type = $this->input->post('shocat');
                break;
        }
        $this->price = $this->input->post('price');
        $this->briefdesc = $this->input->post('message');
        $this->name = $this->input->post('name');
        $this->inputby = $_SESSION['userid'];

        $this->db->insert('catalogue', $this);

        //code for lastid
        $lastid = $this->db->insert_id();

        $ano = $_POST['vnumber'];
        $loops=$ano;
        $startlp= 1;
        while($startlp <= $loops) {
            $data = array(
                'size' =>$this->input->post('size'.$startlp),
                'quantity' =>$this->input->post('quantity'.$startlp),
                'itemid' =>$lastid
            );
            $this->db->insert('sizes', $data);
            /* $this->size = $this->input->post('size'.$startlp);
            $this->quantity = $this->input->post('quantity'.$startlp);
            //input itemid
            $this->itemid =$lastid ;

            $this->db->insert('sizes', $this);*/
            $startlp++;
        }


    }

    function update_item(){
        $id = $this->input->post('itemid');

        $this->name = $this->input->post('name');
        $this->price = $this->input->post('price');
        $this->briefdesc = $this->input->post('message');
        if ($this->input->post('deleted')== 1){
            $this->deleted = $this->input->post('deleted');
        }

        $this->db->update('catalogue', $this, array('itemid' => $id ));

    }


}
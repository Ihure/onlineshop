<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/14/2015
 * Time: 2:42 PM
 */
class getdetails extends CI_Model{

    function usr_det(){
        $id = $_SESSION['userid'];
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('adminid',$id);
        $query=$this->db->get();
        return $query->result_array();
    }

    function get_items(){
        $this->db->select_sum('quantity','available');
        $this->db->select('photo,name,category,price,catalogue.itemid');
        $this->db->from('catalogue');
        $this->db->join('sizes','catalogue.itemid =sizes.itemid');
        $this->db->where('deleted','0')->order_by('transdate', 'desc')->limit(12);
        $this->db->group_by('catalogue.itemid');
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_orders(){
        $this->db->select_sum('total','totals');
        $this->db->select('client.name,email,transdate,client.key,phone');
        $this->db->from('client');
        $this->db->join('orders','client.key =orders.key');
        $this->db->where('ordered',0)->order_by('transdate', 'desc');
        $this->db->group_by('client.key');
        $query=$this->db->get();
        return $query->result_array();

    }
    function get_corders(){
        $this->db->select_sum('total','totals');
        $this->db->select('client.name,email,transdate,client.key,phone');
        $this->db->from('client');
        $this->db->join('orders','client.key =orders.key');
        $this->db->where('ordered',1)->order_by('transdate', 'desc');
        $this->db->group_by('client.key');
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_specorder(){
        $key= $this->input->post('eid');

        $this->db->select('*');
        $this->db->from('client');
        $this->db->where('key',$key);
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_orderdetails(){
        $key= $this->input->post('eid');

        $this->db->select('orders.*,sizes.size');
        $this->db->from('orders');
        $this->db->join('sizes','orders.sizeid =sizes.autoid');
        $this->db->where('key',$key);
        $query=$this->db->get();
        return $query->result_array();
    }

    function get_products(){
        $cat = $this->input->get('ct');
        //$cat = base64_decode($cat);
        $typ = $this->input->get('tp');
        //$typ = base64_decode($typ);


        $this->db->select_sum('quantity','available');
        $this->db->select('photo,name,category,price,catalogue.itemid');
        $this->db->from('catalogue');
        $this->db->join('sizes','catalogue.itemid =sizes.itemid');
        $this->db->where('category',$cat);
        $this->db->where('type',$typ);
        $this->db->where('deleted','0')->order_by('transdate', 'desc')->limit(12);
        $this->db->group_by('catalogue.itemid');
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_item(){
        $id= $this->input->get('getid');
        $id = base64_decode($id);

        $this->db->select('*');
        $this->db->from('catalogue');
        $this->db->where('itemid',$id);
        $query=$this->db->get();
        return $query->result_array();
    }

    function get_size(){
        $id= $this->input->get('getid');
        $id = base64_decode($id);

        $this->db->select('*');
        $this->db->from('sizes');
        $this->db->where('itemid',$id);
        $query=$this->db->get();
        return $query->result_array();
    }

    function get_hmitems(){
        $this->db->select_sum('quantity','available');
        $this->db->select('photo,name,category,price,catalogue.itemid');
        $this->db->from('catalogue');
        $this->db->join('sizes','catalogue.itemid =sizes.itemid');
        $this->db->where('deleted','0')->order_by('transdate', 'desc')->limit(7);
        $this->db->group_by('catalogue.itemid');
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_men(){
        $this->db->select('itemid,price,photo,name,category');
        $this->db->from('catalogue');
        $this->db->where('category','1')->order_by('transdate', 'desc')->limit(3);
        $query=$this->db->get();
        return $query->result_array();
    }
    function get_ladies(){
            $this->db->select('itemid,price,photo,name,category');
            $this->db->from('catalogue');
            $this->db->where('category','2')->order_by('transdate', 'desc')->limit(3);
            $query=$this->db->get();
            return $query->result_array();
    }
    function get_babies(){
                $this->db->select('itemid,price,photo,name,category');
                $this->db->from('catalogue');
                $this->db->where('category','3')->order_by('transdate', 'desc')->limit(3);
                $query=$this->db->get();
                return $query->result_array();
    }
    function get_shoes(){
                    $this->db->select('itemid,price,photo,name,category');
                    $this->db->from('catalogue');
                    $this->db->where('category','4')->order_by('transdate', 'desc')->limit(3);
                    $query=$this->db->get();
                    return $query->result_array();
    }

    function get_itemdet(){
        $id = $this->input->post('eid');

        $this->db->select('*');
        $this->db->from('catalogue');
        $this->db->where('itemid',$id);
        $query=$this->db->get();
        return $query->result_array();

    }

    function get_sizedet(){
        $id = $this->input->post('eid');

        $this->db->select('*');
        $this->db->from('sizes');
        $this->db->where('itemid',$id);
        $query=$this->db->get();
        return $query->result_array();

    }



}
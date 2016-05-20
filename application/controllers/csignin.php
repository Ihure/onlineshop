<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/26/2015
 * Time: 10:50 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class csignin extends CI_Controller {

    public function index()
    {
        $this->load->view('signin');
    }

}

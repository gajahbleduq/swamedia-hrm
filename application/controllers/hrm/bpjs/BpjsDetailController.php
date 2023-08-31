<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BpjsDetailController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'BPJS | Detail';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/bpjs/bpjs_detail');
        $this->load->view('layouts/footer');
    }
}
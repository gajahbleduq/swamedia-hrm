<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BpjsFormController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'BPJS | Form';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/bpjs/bpjs_form');
        $this->load->view('layouts/footer');
    }
}
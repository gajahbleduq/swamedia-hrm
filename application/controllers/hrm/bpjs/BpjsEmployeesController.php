<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BpjsEmployeesController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'BPJS | Employees';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/bpjs/bpjs_employees');
        $this->load->view('layouts/footer');
    }
}
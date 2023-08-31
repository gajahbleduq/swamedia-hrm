<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermitReviewController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Permit Request | In Review';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/permit/permit_review');
        $this->load->view('layouts/footer');
    }
}
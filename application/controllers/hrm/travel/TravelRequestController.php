<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TravelRequestController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Travel Request | Request';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/travel/travel_request');
        $this->load->view('layouts/footer');
    }
}
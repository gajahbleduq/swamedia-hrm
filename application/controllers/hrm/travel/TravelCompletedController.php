<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TravelCompletedController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Travel Request | Completed';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/travel/travel_completed');
        $this->load->view('layouts/footer');
    }
}
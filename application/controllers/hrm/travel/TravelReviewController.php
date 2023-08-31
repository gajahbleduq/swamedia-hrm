<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TravelReviewController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Travel Request | In Review';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/travel/travel_review');
        $this->load->view('layouts/footer');
    }
}
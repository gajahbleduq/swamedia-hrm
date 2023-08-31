<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TravelInboxController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Travel Request | Inbox';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/travel/travel_inbox');
        $this->load->view('layouts/footer');
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TravelExpenseController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Travel Expense';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/travel/travel_expense');
        $this->load->view('layouts/footer');
    }
}
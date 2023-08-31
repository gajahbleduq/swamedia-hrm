<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PermitInboxController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Permit Request | Inbox';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/permit/permit_inbox');
        $this->load->view('layouts/footer');
    }
}
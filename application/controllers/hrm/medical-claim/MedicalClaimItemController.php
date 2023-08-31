<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MedicalClaimItemController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Medical Claim Item';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/medical-claim/medical_claim_item');
        $this->load->view('layouts/footer');
    }
}
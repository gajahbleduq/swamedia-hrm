<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MedicalClaimController extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Medical Claim';

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('hrm/medical-claim/medical_claim');
        $this->load->view('layouts/footer');
    }
}
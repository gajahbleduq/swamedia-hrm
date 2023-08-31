<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerformanceController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('performance/Performance');
        $this->load->library('tcpdf');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            $this->show();
        } else {
            redirect('/login');
        }
    }

    public function show()
    {
        $data['title'] = 'Performance';

        $current_month = date("n");
        $current_year = date("Y");

        $month = $this->input->post('txt_month');
        $month = $month ? $month : $current_month;

        $year = $this->input->post('txt_year');
        $year = $year ? $year : $current_year;

        $this->session->set_userdata('month', $month);
        $this->session->set_userdata('year', $year);

        $data['all_data'] = $this->Performance->get_all_data($month, $year);

        $this->load->view('layouts/header', $data);
        $this->load->view('time-management/performance/index', $data);
        $this->load->view('layouts/footer', $data);
    }

    public function print()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            // Ambil data dari database
            $data['absensi'] = $this->Performance->get_all_absence();

            // Konfigurasi PDF
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->AddPage();

            // Tulis data ke dalam PDF
            $html = '<h3>Daftar Absensi</h3>';
            $html .= '<table border="1" cellpadding="5">';
            $html .= '<tr><th>No</th><th>Date</th><th>Full Name</th><th>Get-In</th><th>Leave</th><th>Late (Hours)</th></tr>';
            $no = 1;
            foreach ($data['absensi'] as $data) {
                $html .= '<tr><td>' . $no . '</td><td>' . $data['tanggal'] . '</td><td>' . $data['nama'] . '</td><td>' . date('H:i', $data['masuk_input']) . '</td><td>' . date('H:i', $data['pulang_input']) . '</td><td>' . date('H:i', $data['telat']) . '</td></tr>';
                $no++;
            }
            $html .= '</table>';
            $pdf->writeHTML($html, true, false, true, false, '');

            // Download PDF
            $pdf->Output('daftar-absensi.pdf', 'D');
        } else {
            redirect('/login');
        }
    }

    public function get_data_logbreak()
    {
        if ($this->session->userdata('logged_in') == TRUE) {
            
            $id = $this->input->post('id');
            $data_break = $this->Performance->get_break_data($id);
            // echo $id;
            echo json_encode($data_break);
        } else {
            redirect('/login');
        }
    }
}
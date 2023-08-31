<?php
class Performance extends CI_Model
{
    public function get_all_data($month, $year)
    {
        if ($month) {
            $this->db->where('MONTH(tanggal)', $month);
        }
        if ($year) {
            $this->db->where('YEAR(tanggal)', $year);
        }
        if ($month && $year) {
            $this->db->where('MONTH(tanggal)', $month);
            $this->db->where('YEAR(tanggal)', $year);
        }

        $user_id = $this->session->userdata('id');

        $this->db->order_by('tanggal', 'ASC');
        $this->db->where('profile_id', $user_id);
        $query = $this->db->get('hrd_absen');
        return $query->result_array();
    }

    public function get_break_data($id)
    {
        $this->db->select('*');
        $this->db->from('hrd_absen_logbreak');
        $this->db->where('absen_id', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_all_absence()
    {
        $this->db->select('hrd_absen.*, hrd_profile.nama');
        $this->db->from('hrd_absen');
        $this->db->join('hrd_profile', 'hrd_profile.id = hrd_absen.profile_id', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }
}
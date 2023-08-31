<?php
class Dashboard extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user()
    {
        $user_id = $this->session->userdata('id');

        $this->db->select('nama, jabatan, org_name AS unit, avatar');
        $this->db->from('hrd_profile');
        $this->db->join('hrd_organization', 'hrd_organization.id = hrd_profile.dept_id', 'left');
        $this->db->join('hrd_jabatan', 'hrd_jabatan.id = hrd_profile.jabatan_id', 'left');
        $this->db->where('hrd_profile.id', $user_id);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function attendance_check()
    {
        $user_id = $this->session->userdata('id');

        $current_date = date('Y-m-d');

        $query = $this->db->get_where('hrd_absen', array('tanggal' => $current_date), array('profile_id' => $user_id));

        return $query->row_array();
    }

    public function work_log_check($id)
    {
        $this->db->select('*');
        $this->db->from('hrd_absen_logbreak');
        $this->db->where(array('absen_id' => $id));
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function attendance_insert($data)
    {
        $this->db->insert('hrd_absen', $data);
        return $this->db->affected_rows();
    }

    public function attendance_update($current_date, $user_id, $current_time, $ip_address)
    {
        $this->db->set('pulang_input', $current_time);
        $this->db->set('pulang_ip', $ip_address);
        $this->db->where('tanggal', $current_date);
        $this->db->where('profile_id', $user_id);
        $this->db->update('hrd_absen');
    }

    public function break_insert($data)
    {
        $this->db->insert('hrd_absen_logbreak', $data);
        return $this->db->affected_rows();
    }
}
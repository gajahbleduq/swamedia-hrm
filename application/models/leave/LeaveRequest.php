<?php
class LeaveRequest extends CI_Model
{
    public function insert_request($data)
    {
        $this->db->insert('hrd_leave', $data);
        return $this->db->affected_rows();
    }

    public function get_all_data($id) {

        $this->db->select('hrd_leave.*, hrd_profile.nama');
        $this->db->from('hrd_leave');
        $this->db->join('hrd_profile', 'hrd_profile.id = hrd_leave.approver', 'left');
        $this->db->where('hrd_leave.profile_id', $id);
        $query = $this->db->get();

        return $query->result_array();
    }
}
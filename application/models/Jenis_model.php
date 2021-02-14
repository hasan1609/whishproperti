<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_model extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('properti_jenis');
        return $this->db->get()->result();
    }
}

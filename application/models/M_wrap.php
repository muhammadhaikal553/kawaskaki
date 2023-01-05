<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wrap extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('wrapping_2195114026');
        $this->db->like('nama_pembungkus', $keyword);
        $this->db->or_like('kd_Pembungkus', $keyword);
        $this->db->or_like('kategori', $keyword);
        $this->db->or_like('satuan', $keyword);
        return $this->db->get()->result();
    }
}

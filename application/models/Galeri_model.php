<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model

{
    private $_table2 = "galeri";
    public $id_galeri;
    public $id;
    public $gambar;
    public function rules()
    {
        return [
            [
                'field' => 'gambar',
                'label' => 'Gambar',
                'rules' => 'required'
            ],
        ];
    }

    public function getall()
    {
        $this->db->select('produk.*, COUNT(galeri.id) as total_gambar');
        $this->db->from('produk');
        $this->db->join('galeri', 'galeri.id=produk.id', 'left');
        $this->db->group_by('produk.id');
        $this->db->order_by('produk.id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    public function getgambarById($id)
    {
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where(['id' => $id]);
        $query = $this->db->get();
        return $query->result();
    }

    // public function save($data)
    // {
    //     $this->db->insert('galeri', $data);
    // $post = $this->input->post();
    // $this->gambar = $this->_uploadImage();
    // $this->id = $post["id"];
    // $this->id_galeri = $post["id_gambar"];

    // $this->db->insert($this->_table2, $this);
    // }


    private function _uploadImage()
    {
        $namagambar = "isi" . time();
        $config['upload_path']  = './gambar/produk/isi';
        $config['allowed_types']  = 'jpg|jpeg|png';
        $config['file_name']  = $namagambar;
        $config['max_size'] = '3072';
        $config['overwrite']  = 'true';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        // return "default.jpg";
    }

    public function cekData()
    {
        $this->db->limit(1);
        $this->db->order_by('id', 'DESC');
        return $this->db->get('galeri')->row_array();
    }

    public function save($insert, $data)
    {
        $this->db->insert_batch('galeri', $insert);
    }

    // public function insertGalery($data)
    // {
    //     return $this->db->table($this->table)->insert($data);
    // }
}

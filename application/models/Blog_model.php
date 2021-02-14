<?php defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    private $_table = "berita";

    public $id;
    public $judul;
    public $isi;
    public $gambar = "default.jpg";
    public $tanggal;

    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            ],

            [
                'field' => 'isi',
                'label' => 'Isi',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tanggal = date("Y-m-d");
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->judul = $post["judul"];
        $this->isi = $post["isi"];
        $this->tanggal = date("Y-m-d");
        if (!empty($_FILES["gambar"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $namagambar = "gambar" . time();
        $config['upload_path']  = './gambar/blog/';
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
    private function _deleteImage($id)
    {
        $blog = $this->getById($id);
        if ($blog->gambar != "default.jpg") {
            $filename = explode(".", $blog->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./gambar/blog/$filename.*"));
        }
    }
}

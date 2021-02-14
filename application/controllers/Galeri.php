<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galeri_model');
        $this->load->model('produk_model');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Galeri';
        $data["galeri"] = $this->galeri_model->getall();
        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('gambar_produk/index', $data);
        $this->load->view('_layout/footer');
    }
    // public function add($id)
    // {
    //     $data['title'] = 'Add Gambar';
    //     $data["produk"] = $this->produk_model->getById($id);
    //     $data["galeri"] = $this->galeri_model->getgambarById($id);

    //     $this->load->view('_layout/header', $data);
    //     $this->load->view('_layout/sidebar', $data);
    //     $this->load->view('_layout/topbar', $data);
    //     $this->load->view('gambar_produk/form_tambah', $data);
    //     $this->load->view('_layout/footer');
    //     $galeri = $this->galeri_model;
    //     $validasi = $this->form_validation;
    //     $validasi->set_rules($galeri->rules());
    //     if ($validasi->run()) {
    //         $galeri->save();
    //         var_dump($galeri);
    //         $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
    //         redirect(site_url('gambar_produk/'));
    //     }
    // }

    public function add($id)
    {
        $data['title'] = 'Add Gambar';
        $data["produk"] = $this->produk_model->getById($id);
        $data["galeri"] = $this->galeri_model->getgambarById($id);

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('gambar_produk/form_tambah');
        $this->load->view('_layout/footer');


        // $upload = $_FILES['gambar']['name'];
        if (!empty($_FILES['gambar']['name'])) {
            $numberofFilie = sizeof($_FILES['gambar']['name']);
            $files = $_FILES['gambar'];
            $namagambar = "isi" . time();
            $config['upload_path']  = './gambar/produk/isi';
            $config['allowed_types']  = 'jpg|jpeg|png';
            $config['file_name']  = $namagambar;
            $config['max_size'] = '3072';
            // $config['overwrite']  = 'true';
            $this->load->library('upload', $config);

            for ($i = 0; $i < $numberofFilie; $i++) {
                $_FILES['gambar']['name'] = $files['name'][$i];
                $_FILES['gambar']['type'] = $files['type'][$i];
                $_FILES['gambar']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['gambar']['error'] = $files['error'][$i];
                $_FILES['gambar']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('gambar')) {
                    $data = $this->upload->data();
                    $image = $data['file_name'];
                    $cek = $this->galeri_model->cekData();
                    if (!$cek) {
                        $idgambar = 1; //jika id gambar kosong maka diawalli 1 jika da maka tambah 1 dst
                    } else {
                        $idgambar = $id;
                    }
                    $insert[$i]['gambar'] = $image;
                    $insert[$i]['id'] = $idgambar;
                }
            }
            $this->galeri_model->save($insert, $data['file_name']);
            $this->session->set_flashdata('succes', 'Data Berhasil Ditambahkan');
            redirect(site_url('galeri'));
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Add Gambar';
        $data["produk"] = $this->produk_model->getById($id);
        $data["galeri"] = $this->galeri_model->getgambarById($id);

        $this->load->view('_layout/header', $data);
        $this->load->view('_layout/sidebar', $data);
        $this->load->view('_layout/topbar', $data);
        $this->load->view('gambar_produk/detail');
        $this->load->view('_layout/footer');
    }

    // public function file()
    // {
    //     $data['title'] = 'Add Gambar';
    //     $this->load->view('_layout/header', $data);
    //     $this->load->view('_layout/sidebar', $data);
    //     $this->load->view('_layout/topbar', $data);
    //     $this->load->view('gambar/form_tambah');
    //     $this->load->view('_layout/footer');


    //     $upload = $_FILES['gambar']['name'];
    //     if ($upload) {
    //         $numberofFilie = sizeof($upload);
    //         $files = $_FILES['gambar'];
    //         $config['upload_path']  = './gambar/produk/isi';
    //         $config['allowed_types']  = 'jpg|jpeg|png';
    //         // $config['file_name']  = $files;
    //         $config['max_size'] = '3072';
    //         // $config['overwrite']  = 'true';
    //         $this->load->library('upload', $config);

    //         for ($i = 0; $i < $numberofFilie; $i++) {
    //             $_FILES['gambar']['name'] = $files['name'][$i];
    //             $_FILES['gambar']['type'] = $files['type'][$i];
    //             $_FILES['gambar']['tmp_name'] = $files['tmp_name'][$i];
    //             $_FILES['gambar']['error'] = $files['error'][$i];
    //             $_FILES['gambar']['size'] = $files['size'][$i];

    //             $this->upload->initialize($config);

    //             if ($this->upload->do_upload('gambar')) {
    //                 $data = $this->upload->data();
    //                 $image = $data['file_name'];
    //                 $cek = $this->galeri_model->cekData();
    //                 if (!$cek) {
    //                     $idgambar = 1; //jika id gambar kosong maka diawalli 1 jika da maka tambah 1 dst
    //                 } else {
    //                     $idgambar = $cek['id_upload'] + 1;
    //                 }
    //                 $insert[$i]['gambar'] = $image;
    //                 $insert[$i]['id_upload'] = $idgambar;
    //                 $insert[$i]['gambar'] = $image;
    //             }
    //         }
    //         $this->galeri_model->save($insert, $data['file_name']);
    //     }
    // }

    // public function process()
    // {
    //     $title = $this->request->getPost('title');
    //     // dapatkan input file berupa array
    //     $files = $this->request->getFiles();

    //     if ($files) {

    //         // buat value id random di table uploads
    //         $random = rand(000, 999);

    //         $data_upload = [
    //             'id' => $random,
    //             'judul' => $title
    //         ];

    //         $this->upload->insertUpload('upload', $data_upload);

    //         // ulangi insert gambar ke table galery menggunakan foreach
    //         // foreach ($files['file_upload'] as $img) {

    //         //     $data_gambar = [
    //         //         'id_upload' => $random,
    //         //         'gambar' => $img
    //         //     ];

    //         //     $namagambar = "coba" . time();
    //         //     $config['upload_path']  = './gambar/produk/';
    //         //     $config['allowed_types']  = 'jpg|jpeg|png';
    //         //     $config['file_name']  = $namagambar;
    //         //     $config['max_size'] = '3072';
    //         //     $config['overwrite']  = 'true';
    //         //     $this->load->library('upload', $config);

    //         //     if ($this->upload->do_upload('gambar')) {
    //         //         return $this->upload->data("file_name");
    //         //     }

    //         //     $this->gambar->insertGalery('gambar', $data_gambar);
    //         //     // upload dengan random name
    //         //     // $img->move( . '../upload/', $img->getRandomName());
    //         // }
    //         $this->session->set_flashdata('success', 'Berhasil upload ' . count($files['file_upload']) . ' files');
    //         redirect(site_url('gambar/index'));
    //     }
    // }
}

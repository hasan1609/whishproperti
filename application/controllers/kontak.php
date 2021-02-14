<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        // $this->load->model("banner_model");
        // $this->load->model("produk_model");
        // $this->load->model("testimoni_model");

    }

    public function index()
    {
        // $data['title'] = 'Kontak';
        // $data["banner"] = $this->banner_model->getall();
        // $data["produk"] = $this->produk_model->getall();
        // $data["testimoni"] = $this->testimoni_model->getall();
        
        $this->load->view('home/header');
        $this->load->view('home/contact');
        $this->load->view('home/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dijual extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");

    }

    public function index()
    {
        $data["produk"] = $this->produk_model->getall();
        $data['title'] = 'Dijual';
        $this->load->view('home/header', $data);
        $this->load->view('home/dijual', $data);
        $this->load->view('home/footer', $data);
    }
}


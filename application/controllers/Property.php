<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Property extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");

    }

    public function index()
    {
        $data["produk"] = $this->produk_model->getall();
        $data['title'] = 'Property';
        $this->load->view('home/header', $data);
        $this->load->view('home/property-grid', $data);
        $this->load->view('home/footer', $data);
    }
}


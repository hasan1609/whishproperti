<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
 public function __construct()
    {
        parent::__construct();
        $this->load->model("banner_model");
        $this->load->model("produk_model");
        $this->load->model("testimoni_model");

    }

    public function index()
    {
        $data['title'] = 'Home';
        $data["banner"] = $this->banner_model->getall();
        $data["produk"] = $this->produk_model->getall();
        $data["testimoni"] = $this->testimoni_model->getall();
        
        $this->load->view('home/header', $data);
        $this->load->view('home/slider', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/footer', $data);
    }
}

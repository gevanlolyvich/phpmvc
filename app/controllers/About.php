<?php

class About extends Controller {
    public function index($nama = 'gevan', $pekerjaan = 'gamer', $umur = 24) {
        $data['nama'] = $nama;
        $data['pekerjaaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
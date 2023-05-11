<?php
class Login extends CI_Controller
{ 
    public function index()
    {
        $nama = $this->input->post("nama");
        $nim = $this->input->post("nim");
        $umur = $this->input->post("umur");

      

        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('form', [])->render();
    }

    public function tampil()
    {
        $nama = 'tata';
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('tampil', ['nama' => $nama])->render();
    }
}

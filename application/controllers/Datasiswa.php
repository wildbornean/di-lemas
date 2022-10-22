<?php 

class Datasiswa extends CI_Controller 
{ 
    
    public function index() 
    { 
        $this->load->view('view-form-datasiswa'); 
    } 

    public function cetak() 
    {
        $this->form_validation->set_rules('nama','nama Datasiswa','required|min_length[5]',[
            'required' => "Nama harus diisi",
            'min_length' => "Nama terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('nis','nis Datasiswa','required|min_length[5]',[
            'required' => "NIS harus diisi",
            'min_length' => "NIS terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('kelas','kelas Datasiswa','required|min_length[5]',[
            'required' => "Kelas harus diisi",
            'min_length' => "Kelas terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir Datasiswa','required|min_length[5]',[
            'required' => "Tanggal lahir harus diisi",
            'min_length' => "Tanggal lahir terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir Datasiswa','required|min_length[5]',[
            'required' => "Tempat lahir harus diisi",
            'min_length' => "Tempat lahir terlalu pendek minimal 5 karakter"]);
        $this->form_validation->set_rules('alamat','alamat Datasiswa','required|min_length[5]',[
            'required' => "Alamat harus diisi",
            'min_length' => "Alamat terlalu pendek minimal 5 karakter"]);
        if ($this->form_validation->run() != true) { 
            $this->load->view('view-form-datasiswa'); 
        } 
        else {
            $data = [ 
                'nama' => $this->input->post('nama'), 
                'nis' => $this->input->post('nis'), 
                'kelas' => $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
                'tempat_lahir' => $this->input->post('tempat_lahir'), 
                'alamat' => $this->input->post('alamat'), 
                'jenis_kelamin' => $this->input->post('jenis_kelamin'), 
                'agama' => $this->input->post('agama')
            ]; 
        
            $this->load->view('view-data-datasiswa', $data); 
        } 
    }
} 
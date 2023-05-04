<?php
/*defined('BASHPATH') or exit('No direct script access allowed');*/

class Data extends CI_Controller
{
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Model_data');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 
        'required', [
            'required'=> 'Nama Siswa Harus di Isi'
        ]);
        $this->form_validation->set_rules('nis', 'NIS', 
        'required', [
            'required' => 'NIS Harus di Isi'
        ]);
        if ($this->form_validation->run() == false){
        $data['agama'] = ['Islam', 'Kristen', 'Katolik', 'Budha', 'Hindu', 'Protestan', 
        'Khonghucu'];
        $this->load->view('data/v_input', $data);
        } else{
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tl' => $this->input->post('tl'),
                'tlr' => $this->input->post('tlr'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('data/v_output', $data);
        }
    }
}

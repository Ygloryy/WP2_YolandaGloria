<?php
    class Dlemas extends CI_Controller
{
    public function index()
 {
    $this->load->view('view_form_dlemas');
 }
    public function cetak()
 {
   $this->form_validation->set_rules('nama', 'Nama Siswa', 
      'required|min_length[3]', [
      'required' => 'Nama Harus diisi',
      'min_lenght' => 'Nama terlalu pendek'
    ]);
    $this->form_validation->set_rules('nis', 'Nis Siswa', 
      'required|min_length[3]', [
      'required' => 'Nis Siswa Harus diisi',
      'min_lenght' => 'Nis Siswa terlalu pendek'
    ]);
    $this->form_validation->set_rules('kelas', 'Kelas Siswa', 
      'required|min_length[3]', [
      'required' => 'Kelas Siswa Harus diisi',
      'min_lenght' => 'Kelas Siswa terlalu pendek'
    ]);
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Siswa', 
      'required|min_length[3]', [
      'required' => 'Tanggal Lahir Siswa Harus diisi',
    ]);
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 
    'required|min_length[3]', [
    'required' => 'Tempat Lahir Siswa Harus diisi',
    'min_lenght' => 'Tempat Lahir Siswa terlalu pendek'
  ]);
    $this->form_validation->set_rules('alamat', 'Alamat Siswa', 
    'required|min_length[3]', [
    'required' => 'Alamat Siswa Harus diisi',
    'min_lenght' => 'Alamat Siswa terlalu pendek'
  ]);

    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 
    'required', [
    'required' => 'Jenis Kelamin harus diisi'
   ]);
   $this->form_validation->set_rules('agama', 'Agama', 
   'required', [
   'required' => 'Agama harus diisi'
  ]);


    if ($this->form_validation->run() != true) {
        $this->load->view('view_form_dlemas');
    } else {
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

        // Memanggil model untuk menyimpan data
        $this->load->model('Model_dlemas');
        $result = $this->Model_dlemas->save_data($data);

        $this->load->view('view_data_dlemas', $data);
        }
    }
  }


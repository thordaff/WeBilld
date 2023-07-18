<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_Data extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('TambahData');
	}
	function Meja()
	{
        $noMeja = $this->input->post('noMeja');
        $statusMeja = '1';
        $data = Array
        (
            'noMeja' => $noMeja,
            'statusMeja_id' => $statusMeja,
        );
        $this->TambahData->TambahMeja($data);
        $this->session->set_flashdata('flash_message', 
        '
            <div class="popUp" id="popup">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row popUp-header">
                        <div class="d-flex flex-row popUp-header-content"style="width: 100%;margin-bottom:-10px;">
                            <div class="left-side d-flex flex-row p-2">
                                <div class="iconNotif" style="background: green;"></div>
                                <p class="fw-bold ms-2 small">WeBilld</p>
                            </div>
                            <div class="right-side ms-auto p-2">
                                <p class="small">Baru Saja</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex p-2">
                        <p class="small">Data meja berhasil ditambahkan</p>
                    </div>
                </div>
            </div>
        ');
        redirect('Admin/KelolaMeja');
	}
    function Pesanan()
    {
        $idUser = $this->input->post('idUser');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $noHP = $this->input->post('noHP');
        $tanggal = $this->input->post('tanggal');
        $mulai = $this->input->post('jamStart');
        $selesai = $this->input->post('jamEnd');
        $mejaId = $this->input->post('noMeja');
        $status = '2';

        $data = Array 
        (
            'user_id' => $idUser,
            'nama_lengkap' => $nama,
            'alamat' => $alamat,
            'email' => $email,
            'noHP' => $noHP,
            'tanggal' => $tanggal,
            'jam_mulai' => $mulai,
            'jam_selesai' => $selesai,
            'meja_id' => $mejaId,
            'status_id' => $status,
        );
        $this->TambahData->TambahPesanan($data);
        redirect('beranda');
    }
}

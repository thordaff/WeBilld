<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TampilData extends CI_Model {
    
    function ShowMeja()
    {
        $this->db->join('statusMeja', 'meja.statusMeja_id = statusMeja.id_status');
       return $this->db->get('meja')->result_array();
    }
    function ShowMejaDetail($id_barang)
    {
        $this->db->join('statusMeja', 'meja.statusMeja_id = statusMeja.id_status');
        $this->db->where('meja.id_meja',$id_barang);
        return $this->db->get('meja')->row_array();
    }

    // ShowPesanan
    function ShowPesananUser()
    {
        $email = $this->session->userdata('email');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $this->db->where('user_id', $user['id_user']);
        $this->db->join('statusPesanan', 'pesanan.status_id = statusPesanan.id_status');
        return $this->db->get('pesanan')->result_array();
    }
}
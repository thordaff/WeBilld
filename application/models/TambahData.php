<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahData extends CI_Model {
    
    function TambahMeja($data)
    {
       $this->db->insert('meja', $data);
    }
    function TambahPesanan($data)
    {
        $this->db->insert('pesanan', $data);
    }
}
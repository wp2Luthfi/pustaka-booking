<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
         $this->load->view('view-form-sepatu');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama_pembeli',
            'Nama Pembeli',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
 
        $this->form_validation->set_rules(
            'no_hp',
            'Nomor Handphone',
            'required',
            [
                'required' => 'Nomor Handphone Harus di Isi'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-sepatu');
        }else {
            $this->load->model('PriceModel');
            $price = $this->PriceModel->price();
            $data = [
                'nama_pembeli'  => $this->input->post('nama_pembeli'),
                'no_hp'         => $this->input->post('no_hp'),
                'merk'          => $this->input->post('merk'),
                'ukuran'        => $this->input->post('ukuran'),
                'harga'         => $price,
            ];
 
 
 
            function Rupiah($angka)
            {
                $data = "Rp " . number_format($angka, 2, ',', '.');
                return $data;
            }
 
            $this->load->view('view-data-sepatu', $data);
        }
    }
}
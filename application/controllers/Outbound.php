<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outbound extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_outbound');
    }

    public function index()
    {
        $data['outbound'] = $this->m_outbound->get_data('barang_out_2195114026')->result();

        $this->load->view('admin/index');
        $this->load->view('outbound/keluar', $data);
    }

    public function tambah()
    {
        $this->load->view('admin/index');
        $this->load->view('outbound/tambah_keluarr');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $data = array(
                'kd_barang' => $this->input->post('kd_barang'),
                'kategori' => $this->input->post('kategori'),
                'nama_barang' => $this->input->post('nama_barang'),
                'stok' => $this->input->post('stok'),
                'satuan' => $this->input->post('satuan'),
                'pabrik_asal' => $this->input->post('pabrik_asal'),
            );
            $this->m_outbound->insert_data($data, 'barang_out_2195114026');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('outbound');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kd_barang', 'Kode Barang', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('stok', 'Jumlah', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('pabrik_asal', 'Pabrik Asal', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['outbound'] = $this->m_outbound->get_data('barang_out_2195114026')->result();
        $this->load->view('pdf/outbound', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("barangkeluar.pdf", array('Attachment' => 0));
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['outbound'] = $this->m_outbound->get_keyword($keyword);
        $this->load->view('admin/index');
        $this->load->view('outbound/keluar', $data);
    }
}

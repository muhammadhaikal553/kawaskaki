<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wrapping extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_wrap');
    }

    public function index()
    {
        $data['wrap'] = $this->m_wrap->get_data('wrapping_2195114026')->result();

        $this->load->view('admin/index');
        $this->load->view('wrapping/wrap', $data);
    }

    public function tambah()
    {
        $this->load->view('admin/index');
        $this->load->view('wrapping/tambah_wrap');
    }

    public function tambah_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->tambah();
        } else {
            $data = array(
                'kd_pembungkus' => $this->input->post('kd_pembungkus'),
                'kategori' => $this->input->post('kategori'),
                'nama_pembungkus' => $this->input->post('nama_pembungkus'),
                'satuan' => $this->input->post('satuan'),
                'stok' => $this->input->post('stok'),
            );
            $this->m_wrap->insert_data($data, 'wrapping_2195114026');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('wrapping');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kd_pembungkus', 'Kode Pembungkus', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('nama_pembungkus', 'Nama Pembungkus', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('satuan', 'Satuan', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('stok', 'Jumlah', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['wrap'] = $this->m_wrap->get_data('wrapping_2195114026')->result();
        $this->load->view('pdf/wrapping', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("pembungkus.pdf", array('Attachment' => 0));
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['wrap'] = $this->m_wrap->get_keyword($keyword);
        $this->load->view('admin/index');
        $this->load->view('wrapping/wrap', $data);
    }
}

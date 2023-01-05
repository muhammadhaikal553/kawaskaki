<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_stock');
    }

    public function index()
    {
        $data['admin'] = $this->db->get_where('admin_2195114026', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('admin/index');
    }

    public function stock()
    {
        $data['stock'] = $this->m_stock->get_data('stock_2195114026')->result();
        $this->load->view('admin/index');
        $this->load->view('admin/stock', $data);
    }

    public function tambah()
    {
        $data['stock'] = $this->m_stock->get_data('stock_2195114026')->result();
        $this->load->view('admin/index');
        $this->load->view('admin/tambah_baru');
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
                'location' => $this->input->post('location'),
                'pabrik_asal' => $this->input->post('pabrik_asal'),
            );
            $this->m_stock->insert_data($data, 'stock_2195114026');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
            redirect('admin/stock');
        }
    }

    public function incoming()
    {
        $data['stock'] = $this->m_stock->get_data('stock_2195114026')->result();
        $this->load->view('admin/index');
        $this->load->view('admin/incoming', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['stock'] = $this->m_stock->get_data('stock_2195114026')->result();
        $this->load->view('pdf/stock', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("stok.pdf", array('Attachment' => 0));
    }

    public function pdfincoming()
    {
        $this->load->library('dompdf_gen');
        $data['stock'] = $this->m_stock->get_data('stock_2195114026')->result();
        $this->load->view('pdf/incoming', $data);
        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("barangmasuk.pdf", array('Attachment' => 0));
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
        $this->form_validation->set_rules('location', 'Lokasi', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
        $this->form_validation->set_rules('pabrik_asal', 'Pabrik Asal', 'trim|required', array(
            'required' => '%s Harap isi bidang ini!'
        ));
    }

    public function excel()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach(range('A', 'H') as $coulumID) {
            $spreadsheet->getActiveSheet()->getColumnDimension($coulumID)->setAutosize(true);
        }
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'Nama Barang');
        $sheet->setCellValue('C1', 'Kode Barang');
        $sheet->setCellValue('D1', 'Kategori');
        $sheet->setCellValue('E1', 'Jumlah');
        $sheet->setCellValue('F1', 'Satuan');
        $sheet->setCellValue('G1', 'Lokasi');
        $sheet->setCellValue('H1', 'Pabrik Asal');

        $users = $this->db->query("SELECT * FROM stock_2195114026")->result_array();
        $x = 2;
        $no = 1;
        foreach($users as $row)
        {
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row['nama_barang']);
            $sheet->setCellValue('C'.$x, $row['kd_barang']);
            $sheet->setCellValue('D'.$x, $row['kategori']);
            $sheet->setCellValue('E'.$x, $row['stok']);
            $sheet->setCellValue('F'.$x, $row['satuan']);
            $sheet->setCellValue('G'.$x, $row['location']);
            $sheet->setCellValue('H'.$x, $row['pabrik_asal']);
            $x++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'stok.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        $writer->save('php://output');

    }

    public function excelincoming()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach(range('A', 'I') as $coulumID) {
            $spreadsheet->getActiveSheet()->getColumnDimension($coulumID)->setAutosize(true);
        }
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'Nama Barang');
        $sheet->setCellValue('C1', 'Kode Barang');
        $sheet->setCellValue('D1', 'Kategori');
        $sheet->setCellValue('E1', 'Jumlah');
        $sheet->setCellValue('F1', 'Satuan');
        $sheet->setCellValue('G1', 'Lokasi');
        $sheet->setCellValue('H1', 'Pabrik Asal');
        $sheet->setCellValue('I1', 'Tanggal Masuk');

        $users = $this->db->query("SELECT * FROM stock_2195114026")->result_array();
        $x = 2;
        $no = 1;
        foreach($users as $row)
        {
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row['nama_barang']);
            $sheet->setCellValue('C'.$x, $row['kd_barang']);
            $sheet->setCellValue('D'.$x, $row['kategori']);
            $sheet->setCellValue('E'.$x, $row['stok']);
            $sheet->setCellValue('F'.$x, $row['satuan']);
            $sheet->setCellValue('G'.$x, $row['location']);
            $sheet->setCellValue('H'.$x, $row['pabrik_asal']);
            $sheet->setCellValue('i'.$x, $row['tgl']);
            $x++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'barangmasuk.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        $writer->save('php://output');

    }

    public function exceloutbound()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach(range('A', 'H') as $coulumID) {
            $spreadsheet->getActiveSheet()->getColumnDimension($coulumID)->setAutosize(true);
        }
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'Nama Barang');
        $sheet->setCellValue('C1', 'Kode Barang');
        $sheet->setCellValue('D1', 'Kategori');
        $sheet->setCellValue('E1', 'Jumlah');
        $sheet->setCellValue('F1', 'Satuan');
        $sheet->setCellValue('G1', 'Pabrik Asal');
        $sheet->setCellValue('H1', 'Tanggal Keluar');

        $users = $this->db->query("SELECT * FROM barang_out_2195114026")->result_array();
        $x = 2;
        $no = 1;
        foreach($users as $row)
        {
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row['nama_barang']);
            $sheet->setCellValue('C'.$x, $row['kd_barang']);
            $sheet->setCellValue('D'.$x, $row['kategori']);
            $sheet->setCellValue('E'.$x, $row['stok']);
            $sheet->setCellValue('F'.$x, $row['satuan']);
            $sheet->setCellValue('G'.$x, $row['pabrik_asal']);
            $sheet->setCellValue('H'.$x, $row['tgl']);
            $x++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'barangkeluar.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        $writer->save('php://output');

    }

    public function excelwrap()
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach(range('A', 'F') as $coulumID) {
            $spreadsheet->getActiveSheet()->getColumnDimension($coulumID)->setAutosize(true);
        }
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'Nama Pembungkus');
        $sheet->setCellValue('C1', 'Kode Pembungkus');
        $sheet->setCellValue('D1', 'Kategori');
        $sheet->setCellValue('E1', 'Jumlah');
        $sheet->setCellValue('F1', 'Satuan');

        $users = $this->db->query("SELECT * FROM wrapping_2195114026")->result_array();
        $x = 2;
        $no = 1;
        foreach($users as $row)
        {
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row['nama_pembungkus']);
            $sheet->setCellValue('C'.$x, $row['kd_pembungkus']);
            $sheet->setCellValue('D'.$x, $row['kategori']);
            $sheet->setCellValue('E'.$x, $row['stok']);
            $sheet->setCellValue('F'.$x, $row['satuan']);
            $x++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'pembungkus.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        $writer->save('php://output');

    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['stock'] = $this->m_stock->get_keyword($keyword);
        $this->load->view('admin/index');
        $this->load->view('admin/stock', $data);
    }

    public function searchincoming()
    {
        $keyword = $this->input->post('keyword');
        $data['stock'] = $this->m_stock->get_keyword($keyword);
        $this->load->view('admin/index');
        $this->load->view('admin/incoming', $data);
    }
}

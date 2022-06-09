<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_po extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
		parent::__construct();		
		$this->load->model('m_po');
		$this->load->model('m_supplier');
		$this->load->model('m_barang');		
    }
	 
	 public function index()
	{
		$this->load->view('purchase_order');
	}

	public function purchase(){

		$tgl_purchase = $this->input->post('tgl_purchase');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_qty = $this->input->post('jumlah_qty');
		$harga_beli = $this->input->post('harga_beli');
		$discount = $this->input->post('discount');
		$nama_supplier = $this->input->post('nama_supplier');
		$dpp = 100/110 * $harga_beli;
		$ppn = 10/100 * $dpp;
		$total = ($harga_beli - $discount) + $ppn;

		$data = array(
			'tgl_purchase' => $tgl_purchase,
			'nama_barang' => $nama_barang,
			'jumlah_qty' => $jumlah_qty,
			'harga_beli' => $harga_beli,
			'discount' => $discount,
			'dpp' => $dpp,
			'ppn' => $ppn,
			'total' => $total,
			'nama_supplier' => $nama_supplier
		);

		$this->m_po->input_data($data,'purchase_order');
		redirect('C_home');
	}

}

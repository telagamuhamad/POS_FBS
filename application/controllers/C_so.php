<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_so extends CI_Controller {

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
		$this->load->model('m_so');	
    }
	 
	 public function index()
	{
		$this->load->view('sales_order');
	}

	public function sales(){

		$tgl_sales = $this->input->post('tgl_sales');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_qty = $this->input->post('jumlah_qty');
		$harga_jual = $this->input->post('harga_jual');
		$discount = $this->input->post('discount');
		$nama_customer = $this->input->post('nama_customer');
		$dpp = 100/110 * $harga_jual;
		$ppn = 10/100 * $dpp;
		$total = ($harga_jual - $discount) + $ppn;

		$data = array(
			'tgl_sales' => $tgl_sales,
			'nama_barang' => $nama_barang,
			'jumlah_qty' => $jumlah_qty,
			'harga_jual' => $harga_jual,
			'discount' => $discount,
			'dpp' => $dpp,
			'ppn' => $ppn,
			'total' => $total,
			'nama_customer' => $nama_customer
		);

		$this->m_so->input_data($data,'sales_order');
		redirect('C_home');
	}

}

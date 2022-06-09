<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends CI_Controller {

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
		$this->load->model('m_barang');	
    }
	 
	 public function index()
	{
        $data['master_barang'] = $this->m_barang->tampil_data()->result();
		$this->load->view('barang', $data);
	}

    public function add(){
        $this->load->view('add_barang');
		
    }   

    public function addBarang(){
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_qty = $this->input->post('jumlah_qty');

        $data = array(
            'nama_barang' => $nama_barang,
            'jumlah_qty' => $jumlah_qty
        );
		$this->m_barang->input_data($data, 'master_barang');
		redirect('C_barang');                
    }

    public function edit_data($id_barang){
		$where = array('id_barang' => $id_barang);
		$data['master_barang'] = $this->m_barang->edit_data($where,'master_barang')->result();
		$this->load->view('editBarang',$data);        
    }

    function update(){
        $nama_barang = $this->input->post('nama_barang');
        $jumlah_qty = $this->input->post('jumlah_qty');

        $data = array(
            'nama_barang' => $nama_barang,
            'jumlah_qty' => $jumlah_qty
        );

        $where = array(
            'nama_barang' => $nama_barang
        );         
        $this->m_barang->update_data($where,$data,'master_barang');
        redirect('c_barang');
    }

}

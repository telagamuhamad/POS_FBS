<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_supplier extends CI_Controller {

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
    }
	 
	 public function index()
	{
        $data['master_supplier'] = $this->m_supplier->tampil_data()->result();
		$this->load->view('supplier', $data);
	}

    public function add(){
        $this->load->view('add_supplier');
		
    }

	public function addsup(){
		
		$nama_supplier = $this->input->post('nama_supplier'); 

		$data = array(
			'nama_supplier' => $nama_supplier
		);

		$this->m_supplier->input_data($data, 'master_supplier');
		redirect('C_supplier');
	}

}

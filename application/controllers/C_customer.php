<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends CI_Controller {

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
		$this->load->model('m_customer');	
    }
	 
	 public function index()
	{
        $data['master_customer'] = $this->m_customer->tampil_data()->result();
		$this->load->view('customer', $data);
	}

    public function add(){
        $this->load->view('add_customer');
		
    }

	public function addcust(){
		
		$nama_customer = $this->input->post('nama_customer'); 

		$data = array(
			'nama_customer' => $nama_customer
		);

		$this->m_customer->input_data($data, 'master_customer');
		redirect('C_customer');
	}

}

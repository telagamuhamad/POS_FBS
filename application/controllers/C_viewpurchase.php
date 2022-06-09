<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_viewpurchase extends CI_Controller {

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

    public function __construct(){
		parent::__construct();		
		$this->load->model('m_po');
		$this->load->library('pdf');
    }
	public function index()
	{
        $data['purchase_order'] = $this->m_po->tampil_data()->result();
		$this->load->view('view_purchase', $data);
	}

    public function cetak($id_purchase){
        // title dari pdf
        $this->data['title_pdf'] = 'Purchase Order';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'purchase_order';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";
        
        $where = array('id_purchase' => $id_purchase);
		$data['purchase_order'] = $this->m_po->edit_data($where,'purchase_order')->result();
		$html = $this->load->view('view_pdf',$data, true);	    
        
        // run dompdf
        $this->pdf->generate($html, $file_pdf,$paper,$orientation);
    }

    public function cetaklaporan(){
        // title dari pdf
        $this->data['title_pdf'] = 'Purchase Order';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'purchase_order';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "landscape";
        
        $data['purchase_order'] = $this->m_po->tampil_data()->result();
		$html = $this->load->view('view_pdf',$data, true);	    
        
        // run dompdf
        $this->pdf->generate($html, $file_pdf,$paper,$orientation);        
    }
}

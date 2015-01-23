<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Klasifikasi extends CI_Controller {
	private $view_path = "master_data/klasifikasi/";

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('klasifikasi_model');


//        if(!$this->session->userdata('is_logged_in')){
 //           redirect('admin/login');
 //       }
    }

	// (show the list)
	public function index()
	{
		$this->load->library('table');
		
		$data['list_klasifikasi'] = $this->klasifikasi_model->get_all();

		$data['title'] = 'Data Klasifikasi';
		$data['view'] = $this->view_path.'index';
		$this->load->view('_layout', $data);
	}

	// (add one)
	public function add() {
		$data['title'] = 'Tambah Data Klasifikasi';
		$data['view'] = $this->view_path.'detail';
		$this->load->view('_layout', $data);
	} 

	// (edit one)
	public function edit($id) {

	} 

	// (view one)
	public function view($id) {

	} 

	// (delete one user)
	public function delete($id) {

	} 
}


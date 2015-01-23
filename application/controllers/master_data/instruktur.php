<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instruktur extends CI_Controller {

    /**
    * Responsable for auto load the model
    * @return void
    */
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
	//	$data['title'] = 'To-Dos List';
		$data['list_klasifikasi'] = $this->klasifikasi_model->get_all();

		$data['view'] = 'master_data/instruktur';
		$this->load->view('_layout', $data);
	}

	// (add one)
	public function add() {

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


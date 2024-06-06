<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instrument extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('admin/instrument_model', 'instrument_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_instrument()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/instrument/add_instrument';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function instrument_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->instrument_model->instrument_data_submit($data) == true) {

					redirect("instrument/view_instrument");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function instrument_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['instrument_view'] = $this->instrument_model->instrument_view();
					$data['view'] = 'admin/instrument/view_instrument';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function instrument_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_instrument'] = $this->instrument_model->instrument_edit($id);
					$data['view'] = 'admin/instrument/edit_instrument';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function instrument_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->instrument_model->instrument_update_data($data) == true) {

							redirect("instrument/view_instrument");
						} ?><?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function instrument_delete($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					if ($this->instrument_model->instrument_delete($id) == true) {

						redirect("instrument/view_instrument");
					}
				} else {
					redirect('admin/auth/login');
				}
			}
		}
				?>
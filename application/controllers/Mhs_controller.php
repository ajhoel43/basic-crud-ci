<?php

/**
*
*/
class Mhs_controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mhs_model');
	}

	public function form_add_mhs()
	{
		$data['records'] = $this->mhs_model->get_mhs();
		$data['title'] = "CRUD Data MHS";

		$this->load->view('templates/header', $data);
		$this->load->view('mhs/form', $data);
		$this->load->view('mhs/tabel_mhs', $data);
		$this->load->view('templates/footer');
	}

	function add_mhs()
	{
		$save = $this->input->post('tambah');

		if ( $save )
		{
			$this->form_validation->set_rules('NIM', 'NIM', 'required');
			$this->form_validation->set_rules('Nama', 'Nama', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('news/gagal');
			} else {
				$this->mhs_model->add_mhs_($this->input->post());
				$this->load->view('news/success');
			}
		}

		$this->form_add_mhs();
	}

	function form_edit_mhs($nim)
	{
		$data['title'] = "Edit Detail Mahasiswa";
		$data['record'] = $this->mhs_model->get_mhs($nim);

		$this->load->view('templates/header', $data);
		$this->load->view('mhs/form_edit', $data);
		$this->load->view('templates/footer');
	}

	function edit_mhs($nim = null)
	{
		$save = $this->input->post('update');

		if ($save) {
			$upd = $this->mhs_model->add_mhs_($this->input->post());

			if ($upd) {
				$this->load->view('news/success');
				redirect('mhs_controller/form_add_mhs');
			} else
				echo "Gagal input data";
		}

		$this->form_edit_mhs($nim);
	}

	function delete_mhs($nim)
	{
		$this->mhs_model->delete_mhs($nim);
		redirect('mhs_controller/form_add_mhs');
	}

}

?>

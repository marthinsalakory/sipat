<?php

class Dashboard extends Controller
{

	function __construct()
	{
		// $this->m4s = $this->M4S('fungsi');
		$this->helper = new Helper;
	}

	public function index()
	{
		$this->helper->is_login();
		if ($this->helper->in_groups('admin')) {
			$data =
				[
					'title' => 'System Permintaan Alat',
					'dashboard' => 'active',

				];
			$this->view('templates/header', $data);
			$this->view('admin/index', $data);
			$this->view('templates/footer', $data);
		} else if ($this->helper->in_groups('operator')) {
			$data =
				[
					'title' => 'System Permintaan Alat',
					'dashboard' => 'active',

				];
			$this->view('templates/header', $data);
			$this->view('operators/index', $data);
			$this->view('templates/footer', $data);
		} else if ($this->helper->in_groups('user')) {
			$data =
				[
					'title' => 'System Permintaan Alat',
					'dashboard' => 'active',

				];
			$this->view('templates/header', $data);
			$this->view('users/index', $data);
			$this->view('templates/footer', $data);
		} else {
			$this->helper->redirect(LOGOUT);
		}
	}
}

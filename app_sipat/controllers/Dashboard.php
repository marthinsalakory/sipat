<?php

class Dashboard extends Controller
{

	function __construct()
	{
		$this->helper = new Helper;
	}

	public function index()
	{
		if (in_groups('admin')) {
			$data =
				[
					'title' => 'System Permintaan Alat',
					'dashboard' => 'active',

				];
			$this->view('templates/header', $data);
			$this->view('admin/index', $data);
			$this->view('templates/footer', $data);
		} else if (in_groups('operator')) {
			$data =
				[
					'title' => 'System Permintaan Alat',
					'dashboard' => 'active',

				];
			$this->view('templates/header', $data);
			$this->view('operators/index', $data);
			$this->view('templates/footer', $data);
		} else if (in_groups('user')) {
			$data =
				[
					'title' => 'System Permintaan Alat',
					'dashboard' => 'active',

				];
			$this->view('templates/header', $data);
			$this->view('users/index', $data);
			$this->view('templates/footer', $data);
		} else {
			header("Location: " . BASEURL . "/m4s_sislog/logout.php");
		}
	}
}

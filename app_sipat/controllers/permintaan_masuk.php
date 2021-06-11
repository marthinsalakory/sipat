<?php

class Permintaan_masuk extends Controller
{

	function __construct()
	{
		$this->helper = new Helper;
	}

	public function belum_ditinjau()
	{
		$data =
			[
				'title' => 'Permintaan Belum Ditinjau',
				'dashboard' => 'active',

			];
		$this->view('templates/header', $data);
		$this->view('permintaan_masuk/belum_ditinjau', $data);
		$this->view('templates/footer', $data);
	}

	public function dalam_proses()
	{
		$data =
			[
				'title' => 'Permintaan Belum Ditinjau',
				'dashboard' => 'active',

			];
		$this->view('templates/header', $data);
		$this->view('permintaan_masuk/belum_ditinjau', $data);
		$this->view('templates/footer', $data);
	}
}

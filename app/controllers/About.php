<?php

class About extends Controller{
	
	public function index($nama = 'azis', $pekerjaan = 'programmer')
	{
		$this->view('about/index');
	}

	public function page()
	{
		echo 'about/page';
	}
}
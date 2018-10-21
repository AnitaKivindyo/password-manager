<?php
class Welcome extends CI_Controller {
	public function __construct()
{
//call CodeIgniter's default Constructor
parent::__construct();

//load database libray manually
$this->load->database();

//load Model
$this->load->model('welcomemodel');
}

private function hash_password($password){
   return password_hash($password, PASSWORD_BCRYPT);
}
	public function login()
	{
		$this->load->view('login');

	}
	public function signup()
	{
		$this->load->view('signup');
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$m=$this->input->post('password');
		$hashed=$this->hash_password($m);

//call saverecords method of Hello_Model and pass variables as parameter
		$this->welcomemodel->signup($n,$e,$hashed);
		echo "Records Saved Successfully";
		}
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function addsite()
	{
		$this->load->view('addsite');
		if($this->input->post('save'))
		{
			$u=$this->input->post('url');
			$n=$this->input->post('name');
			$un=$this->input->post('username');
			$p=$this->input->post('password');

			$this->welcomemodel->addsite($u,$n,$un,$p);
			echo "Site Successfully added";
		}
	}
}

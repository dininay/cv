<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("home_model");
	}

	public function index()
	{
		$data["info"] = $this->home_model->getAll();
		$data["biodata"] = $this->home_model->getBiodata();
		$data["pendidikan"] = $this->home_model->getPendidikan();
		$data["pengalaman"] = $this->home_model->getPengalaman();
		$data["portfolio"] = $this->home_model->getPortfolio();
		$data["skill"] = $this->home_model->getSkill();
		$data["skill2"] = $this->home_model->getSkill2();
		$data["ig"] = $this->home_model->getIg();
		$data["fb"] = $this->home_model->getFb();
		$data["user"] = $this->home_model->getUser();
		// var_dump($data);
		$this->load->view('home',$data);
	
	}

}

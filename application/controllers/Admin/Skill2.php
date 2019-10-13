<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("skill2_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['skill2'] =$this->skill2_model->getSkill2();
		var_dump($data);
		$this->load->view('admin/skill2/index', $data);
	}
	public function add()
	{
		$skill2 = $this->skill2_model;
		$validation = $this->form_validation;
		$validation->set_rules($skill2->rules());
		if ($validation->run()){
			$skill2->save();
			$this->session->set_flashdata('succes','Data Skill Berhasil Ditambah');
			redirect(site_url('admin/skill2'));
		}
		$this->load->view("admin/skill2");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/skill2');

		$skill2 = $this->skill2_model;
		$validation = $this->form_validation;
		$validation->set_rules($skill2->rules());

		if ($validation->run()) {
			$skill2->update();
			$this->session->set_flashdata('susses','Data Skill Berhasil Diubah');
			redirect(site_url('admin/skill2'));
		}
		$data["skill2"] = $skill2->getById($id);
		if (!$data["skill2"])show_404();

		$this->load->view("admin/skill2/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->skill2_model->delete($id)) {
			redirect(site_url('admin/skill2'));
		}
	}
}
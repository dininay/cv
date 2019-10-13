<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("portfolio_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['portfolio'] =$this->portfolio_model->getPortfolio();
		var_dump($data);
		$this->load->view('admin/portfolio/index', $data);
	}
	public function add()
	{
		$portfolio = $this->portfolio_model;
		$validation = $this->form_validation;
		$validation->set_rules($portfolio->rules());
		if ($validation->run()){
			$portfolio->save();
			$this->session->set_flashdata('succes','Data Skill Berhasil Ditambah');
			redirect(site_url('admin/portfolio'));
		}
		$this->load->view("admin/portfolio");
	}
	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/portfolio');

		$portfolio = $this->portfolio_model;
		$validation = $this->form_validation;
		$validation->set_rules($portfolio->rules());

		if ($validation->run()) {
			$portfolio->update();
			$this->session->set_flashdata('susses','Data Portfolio Berhasil Diubah');
			redirect(site_url('admin/portfolio'));
		}
		$data["portfolio"] = $portfolio->getById($id);
		if (!$data["portfolio"])show_404();

		$this->load->view("admin/portfolio/edit_form", $data);
	}
	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if($this->portfolio_model->delete($id)) {
			redirect(site_url('admin/portfolio'));
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_project', '', TRUE);
		$this->load->library('pagination');
	}
	
	public function index(){
		if($this->session->userdata('ustatus') == 'logged_in'){
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
		else
			$this->load->view('login');
	}

	public function pivot(){
		$data['show'] = $this->m_project->getData();

		$this->load->view('header');
		$this->load->view('pivot', $data);
		$this->load->view('footer');
	}

	public function input(){
		$prm['witel'] = $this->input->post('witel');
		$prm['uraian'] = $this->input->post('uraian');
		$prm['id_deployer'] = $this->input->post('id_deployer');
		$prm['id_project'] = $this->input->post('id_project');
		$prm['id_mypro'] = $this->input->post('id_mypro');
		$prm['nomor_cb'] = $this->input->post('nomor_cb');
		$prm['status_po'] = $this->input->post('optone');
		$prm['status_berkas'] = $this->input->post('opttwo');
		$prm['status_pekerjaan'] = $this->input->post('optthree');
		$prm['nomor_pr'] = $this->input->post('nomor_pr');
		$prm['nomor_po'] = $this->input->post('nomor_po');
		$prm['nomor_sp'] = $this->input->post('nomor_sp');
		$prm['toc'] = $this->input->post('toc');
		$prm['material'] = $this->input->post('material');
		$prm['jasa'] = $this->input->post('jasa');
		$prm['paket_pekerjaan'] = $this->input->post('paket_pekerjaan');
		$prm['periode'] = $this->input->post('periode');
		$prm['tahun'] = $this->input->post('tahun');
		$prm['nilai_bast'] = $this->input->post('nilai_bast');
		$prm['tgl_bast'] = $this->input->post('tgl_bast');

		$this->m_project->inputs($prm);

		redirect('project/redir');
	}

	public function redir(){
		$this->load->view('redir');
	}

	public function login(){
		$this->load->view('login');
	}
	public function add_account(){
		$this->load->view('add_account');
	}
	public function lists(){
		//konfigurasi pagination
        $config['base_url'] = site_url('project/list'); //site url
        $config['total_rows'] = $this->db->count_all('t_detail_project'); //total row
        $config['per_page'] = 100;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_project->getDataList($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

        $data['data'] = $this->m_project->getData();

        //load view mahasiswa view
        $this->load->view('header');
        $this->load->view('list_view',$data);
        $this->load->view('footer');
	}
}

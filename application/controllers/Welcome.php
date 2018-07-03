<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
 
	public function index()
	{
		$this->load->model('pic_model');
 
		$data['picture_list'] = $this->pic_model->get_all_pics();
		
		$this->load->view('header');
		$this->load->view('picture_list', $data);
		$this->load->view('footer');
	}
	/****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->welcome->edit_data($id);
    $this->load->view('edit', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/
     /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('user_data');
    $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    redirect('welcome/index');
    }
    /****************************  END DELETE DATA ***************************/
    public function submit_data()
    {
    $data = array('username'                   => $this->input->post('username'),
                  'password'                      => $this->input->post('pwd'),
                  'role'                        => $this->input->post('role'),
                  );
    
    $insert = $this->welcome->insert_data($data);
    $this->session->set_flashdata('message', 'Your data inserted Successfully..');
    redirect('welcome/index');
    }
}
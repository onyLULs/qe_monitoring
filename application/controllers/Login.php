<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('user','',TRUE);
    }

    public function index(){
        if($this->session->userdata('status') != 'logged_in'){
    	   $this->load->view('login');
        }
        else
            redirect('project');
    }

    public function login_process(){
    	$username = $this->input->post('username');
    	$pwd = $this->input->post('pwd');

    	$prm['username'] = $username;
    	$prm['pwd'] = $pwd;

    	if($this->user->checkUser($prm)){
    		/*$newdata = array(
    			'nik' => $nik,
    			'logged_in' => TRUE
    		);

    		$this->session->set_userdata($newdata);*/

    		$users = $this->user->getUser($prm);

    		foreach($users->result() as $u){
    			$data_uname = $u->username;
                $data_role = $u->role;
    		}

    		$data_user = array(
    			'uname' => $data_uname,
                'urole' => $data_role,
    			'ustatus' => 'logged_in'
    		);

    		var_dump($data_user);

    		$this->session->set_userdata($data_user);

    		redirect('project');
    	}
    	else{
    		echo '<script type="text/javascript">alert("username atau password Anda salah!");</script>';

    		$this->load->view('login');
    	}
    }
    public function account_process(){
        $username = $this->input->post('username');
        $pwd = $this->input->post('pwd');

        $prm['username'] = $username;
        $prm['pwd'] = $pwd;

        if($this->user->checkUser($prm)){
            /*$newdata = array(
                'nik' => $nik,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);*/

            $users = $this->user->getUser($prm);

            foreach($users->result() as $u){
                $data_uname = $u->username;
                $data_role = $u->role;
            }

            $data_user = array(
                'uname' => $data_uname,
                'urole' => $data_role,
                'ustatus' => 'logged_in'
            );

            var_dump($data_user);

            $this->session->set_userdata($data_user);

            redirect('project');
        }
        else{
            echo '<script type="text/javascript">alert("username atau password Anda salah!");</script>';

            $this->load->view('login');
        }
    }
}

?>
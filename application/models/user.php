<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
	public function checkUser($prm){
		$this->db->where('username', $prm['username']);
		$this->db->where('password', md5($prm['pwd']));

		$query = $this->db->get('t_user');

		if($query->num_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function getUser($prm){
		/*$query = $this->db->query("
			SELECT *
			FROM tbl_user
			WHERE nik = '{$prm["nik"]}'
				AND 'password' = md5('{$prm['pwd']}')
		");

		return $query->result();*/

		$this->db->select('*');
        $this->db->from('t_user');
        $this->db->where('username',$prm['username']);
        $this->db->where('password',md5($prm['pwd']));

        return $query = $this->db->get();
	}
}
?>
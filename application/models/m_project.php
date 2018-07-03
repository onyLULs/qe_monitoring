<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Project extends CI_Model{
	public function getData(){
		$query = $this->db->query("
			SELECT * FROM t_detail_project
		");

		return $query->result();
	}

	public function getDataList($limit, $start){
		$query = $this->db->get('t_detail_project', $limit, $start);
        return $query;
	}

	public function inputs($prm){
		$data = array(
			'witel' => $prm['witel'],
			'uraian_pekerjaan' => $prm['uraian'],
			'id_deployer' => $prm['id_deployer'],
			'id_project' => $prm['id_project'],
			'id_mypro' => $prm['id_mypro'],
			'no_cb' => $prm['nomor_cb'],
			'status_po' => $prm['status_po'],
			'status_berkas' => $prm['status_berkas'],
			'status_pekerjaan' => $prm['status_pekerjaan'],
			'no_pr' => $prm['nomor_pr'],
			'no_po' => $prm['nomor_po'],
			'no_sp' => $prm['nomor_sp'],
			'toc' => $prm['toc'],
			'material' => $prm['material'],
			'jasa' => $prm['jasa'],
			'nilai_rekon' => $prm['material']+$prm['jasa'],
			'paket_pekerjaan' => $prm['paket_pekerjaan'],
			'periode' => $prm['periode'],
			'tahun' => $prm['tahun'],
			'nilai_bast' => $prm['nilai_bast'],
			'tgl_bast' => $prm['tgl_bast']
		);

		return $this->db->insert('t_detail_project', $data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Model{
	var $table = 't_detail_project';
	var $column_order = array('no', 'witel', 'uraian_pekerjaan', 'id_deployer', 'id_project', 'id_mypro', 'no_cb', 'status_po', 'status_berkas', 'status_pekerjaan', 'no_pr', 'no_po', 'no_sp', 'toc', 'material', 'jasa', 'nilai_rekon', 'paket_pekerjaan', 'periode', 'tahun', 'nilai_bast', 'tgl_bast'); //field yang ada di table user
    var $column_search = array('no', 'witel', 'uraian_pekerjaan', 'id_deployer', 'id_project', 'id_mypro', 'no_cb', 'status_po', 'status_berkas', 'status_pekerjaan', 'no_pr', 'no_po', 'no_sp', 'toc', 'material', 'jasa', 'nilai_rekon', 'paket_pekerjaan', 'periode', 'tahun', 'nilai_bast'); //field yang diizin untuk pencarian 
    var $order = array('no' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function update_info($data,$no)
    {
    $this->db->where('no', $no); 
    return $this->db->update($this->table, $data); 
    }
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    } 
    public function find_item($no)
    {
        return $this->db->get_where($this->table, array('no' => $no))->row();
    } 

    public function delete_item($no)
    {
        return $this->db->delete($this->table, array('no' => $no)); //$this->table : nama tabel yang diambil dari $table
    }
    public function update_item($no) 
    { 
        if($id==0)
        {
            return $this->db->insert($this->table,$this->column_search);//$this->column_search : nama kolom yang diambil dari column_search
        }
        else
        {
            $this->db->where('no',$id);
            return $this->db->update($this->table,$this->column_search);
        } 
    }
}
?>
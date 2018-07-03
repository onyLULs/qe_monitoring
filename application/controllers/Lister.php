<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Lister extends CI_Controller {
    // /****  START OPEN EDIT FORM WITH DATA ***/
    // public function edit_data($no)
    // {
    // $this->data['edit_data']= $this->welcome->edit_data($id);
    // $this->load->view('edit', $this->data, FALSE);
    // }
    // /****  END OPEN EDIT FORM WITH DATA ***/
    //  ***  START DELETE DATA ***
    // public function delete_data($id)
    // {  
    // $this->db->where('id', $id);
    // $this->db->delete('user_data');
    // $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    // redirect('welcome/index');
    // }
    // /****  END DELETE DATA ***/

    function __construct(){
        parent::__construct();
        $this->load->model('listing');
        $this->load->model('m_project');
    }
 
    function index(){
        $data['data'] = $this->m_project->getData();
        $this->load->view('header');
        $this->load->view('list_view', $data);
        $this->load->view('footer');
    }
    public function delete($no) 
   {
       $item = $this->listing->delete_item($no);
       redirect(base_url('lister'));
   }
   public function edit($no) 
   {
       $item = $this->listing->find_item($no);
       $this->load->view('header');
       $this->load->view('lister_edit',array('item'=>$item));
       $this->load->view('footer');
   }
    public function update($no)
    { 
        $data['witel']=$_POST['witel']; 
        $data['uraian_pekerjaan']=$_POST['uraian_pekerjaan'];   
        $data['id_deployer'] = $_POST['id_deployer'];
        $data['id_project'] = $_POST['id_project'];
        $data['id_mypro'] = $_POST['id_mypro'];
        $data['no_cb'] = $_POST['no_cb'];
        $data['status_po'] = $_POST['status_po'];
        $data['status_berkas'] = $_POST['status_berkas'];
        $data['status_pekerjaan'] = $_POST['status_pekerjaan'];
        $data['no_pr'] = $_POST['no_pr'];
        $data['no_po'] = $_POST['no_po'];
        $data['no_sp'] = $_POST['no_sp'];
        $data['toc'] = $_POST['toc'];
        $data['material'] = $_POST['material'];
        $data['jasa'] = $_POST['jasa'];
        $data['nilai_rekon'] = $_POST['nilai_rekon'];
        $data['paket_pekerjaan'] = $_POST['paket_pekerjaan'];
        $data['periode'] = $_POST['periode'];
        $data['tahun'] = $_POST['tahun'];
        $data['nilai_bast'] = $_POST['nilai_bast'];
        $data['tgl_bast'] = $_POST['tgl_bast'];

          $res=$this->listing->update_info($data, $_POST['no']);
          if($res)
          {
            redirect(base_url('lister'));
          }
          else
          {
              redirect(base_url('lister/edit/'.$no));
          }
         
   }
   
    function get_data_user()
    {
        $lists = $this->listing->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($lists as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->witel;
            $row[] = $field->uraian_pekerjaan;
            $row[] = $field->id_deployer;
            $row[] = $field->id_project;
            $row[] = $field->id_mypro;
            $row[] = $field->no_cb;
            $row[] = $field->status_po;
            $row[] = $field->status_berkas;
            $row[] = $field->status_pekerjaan;
            $row[] = $field->no_pr;
            $row[] = $field->no_po;
            $row[] = $field->no_sp;
            $row[] = $field->toc;
            $row[] = $field->material;
            $row[] = $field->jasa;
            $row[] = $field->nilai_rekon;
            $row[] = $field->paket_pekerjaan;
            $row[] = $field->periode;
            $row[] = $field->tahun;
            $row[] = $field->nilai_bast;
            $row[] = $field->tgl_bast;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->listing->count_all(),
            "recordsFiltered" => $this->listing->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
 
}
?>
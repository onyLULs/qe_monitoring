<div class="row">

   <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Item</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('lister');?>"> Back</a>
        </div>
    </div>
</div>
<!-- <input type="text" name="no" class="form-control"  value="<?php echo $item->no; ?>" readonly="no"> -->
    <div class="row">
    <form action = "<?php echo base_url('Lister/update/'.$item->no);?>" method = "post">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table>
            <H2 class="pull-center"> EDIT DATA</H2>
                <tr>
                    <td>
                        <strong>NO:</strong>
                    </td>
                    <td>
                        <input type="text" name="no" readonly ="true" class="form-control" value="<?php echo $item->no; ?>">
                    </td>   
                </tr>
                <tr>
                    <td>
                        
                        <strong>WITEL:</strong>
                    </td>
                    <td>
                        <input type="text" name="witel" readonly  = "true"class="form-control" value="<?php echo $item->witel; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>URAIAN PEKERJAAN:</strong>
                    </td>
                    <td>
                        <input type="text" name="uraian_pekerjaan" class="form-control" value="<?php echo $item->uraian_pekerjaan; ?>">
                    </td>   
                </tr>
                <tr>
                    <td>
                        <strong>ID DEPLOYER:</strong>
                    </td>
                    <td>
                        <input type="text" name="id_deployer" class="form-control" value="<?php echo $item->id_deployer; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>ID PROJECT:</strong>
                    </td>
                    <td>
                        <input type="text" name="id_project" class="form-control" value="<?php echo $item->id_project; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>ID MYPRO:</strong>
                    </td>
                    <td>
                        <input type="text" name="id_mypro" class="form-control" value="<?php echo $item->id_mypro; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>NO CB:</strong>
                    </td>
                    <td>
                        <input type="text" name="no_cb" class="form-control" value="<?php echo $item->no_cb; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>STATUS PO:</strong>
                    </td>
                    <td>
                        <input type="text" name="status_po" class="form-control" value="<?php echo $item->status_po; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>STATUS BERKAS:</strong>
                    </td>
                    <td>
                        <input type="text" name="status_berkas" class="form-control" value="<?php echo $item->status_berkas; ?>">
                    </td>                   
                </tr> 
                <tr>
                    <td>
                        <strong>STATUS PEKERJAAN:</strong>
                    </td>
                    <td>
                        <input type="text" name="status_pekerjaan" class="form-control" value="<?php echo $item->status_pekerjaan; ?>">
                    </td>                   
                </tr> 
                <tr>
                    <td>
                        <strong>NO PR:</strong>
                    </td>
                    <td>
                        <input type="text" name="no_pr" class="form-control" value="<?php echo $item->no_pr; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>NO PO:</strong>
                    </td>
                    <td>
                        <input type="text" name="no_po" class="form-control" value="<?php echo $item->no_po; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>NO SP:</strong>
                    </td>
                    <td>
                        <input type="text" name="no_sp" class="form-control" value="<?php echo $item->no_sp; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>TOC:</strong>
                    </td>
                    <td>
                        <input type="text" name="toc" class="form-control" value="<?php echo $item->toc; ?>">
                    </td>                   
                </tr>  
                <tr>
                    <td>
                        <strong>MATERIAL:</strong>
                    </td>
                    <td>
                        <input type="text" name="material" class="form-control" value="<?php echo $item->material; ?>">
                    </td>                   
                </tr>  
                <tr>
                    <td>
                        <strong>JASA:</strong>
                    </td>
                    <td>
                        <input type="text" name="jasa" class="form-control" value="<?php echo $item->jasa; ?>">
                    </td>                   
                </tr>  
                <tr>
                    <td>
                        <strong>NILAI REKON:</strong>
                    </td>
                    <td>
                        <input type="text" name="nilai_rekon" class="form-control" value="<?php echo $item->nilai_rekon; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>PAKET PEKERJAAN:</strong>
                    </td>
                    <td>
                        <input type="text" name="paket_pekerjaan" class="form-control" value="<?php echo $item->paket_pekerjaan; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>PERIODE:</strong>
                    </td>
                    <td>
                        <input type="text" name="periode" class="form-control" value="<?php echo $item->periode; ?>">
                    </td>                   
                </tr>  
                <tr>
                    <td>
                        <strong>TAHUN:</strong>
                    </td>
                    <td>
                        <input type="text" name="tahun" class="form-control" value="<?php echo $item->tahun; ?>">
                    </td>                   
                </tr>    
                <tr>
                    <td>
                        <strong>NILAI BAST:</strong>
                    </td>
                    <td>
                        <input type="text" name="nilai_bast" class="form-control" value="<?php echo $item->nilai_bast; ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <strong>TANGGAL BAST:</strong>
                    </td>
                    <td>
                        <input type="text" name="tgl_bast" class="form-control" value="<?php echo $item->tgl_bast; ?>">
                    </td>                   
                </tr>
            </table> 
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-12 ">

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
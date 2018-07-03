<div class="container">
	<h3>Data <strong> LOP</strong></h3>

	<table id="" class="table table-striped">
		
			<tr>
				<th>NO</th>
				<th>WITEL</th>
				<th>URAIAN PEKERJAAN</th>
                <th>ID DEPLOYER</th>
                <th>ID PROJECT</th>
                <th>ID MYPRO</th>
                <th>NO CB</th>
                <th>STATUS PO</th>
                <th>STATUS BERKAS</th>
                <th>STATUS PEKERJAAN</th>
                <th>NO PR</th>
                <th>NO PO</th>
                <th>NO SP</th>
                <th>TOC</th>
                <th>MATERIAL</th>
                <th>JASA</th>
                <th>NILAI REKON</th>
                <th>PAKET PEKERJAAN</th>
                <th>PERIODE</th>
                <th>TAHUN</th>
                <th>NILAI BAST</th>
                <th>TGL BAST</th>   
                <th>ACTION</th>
                <!-- <th><a href="edit_data" class="btn btn-info">Edit</a></th>
                <th><a href="delete_data" class="btn btn-danger">Delete</a></th>  -->   
                </tr>
    
          <?php foreach ($data as $row) :?>
                <tr>
                    <td><?php echo $row->no; ?></td>
                    <td><?php echo $row->witel; ?></td>
                    <td><?php echo $row->uraian_pekerjaan; ?></td>
                    <td><?php echo $row->id_deployer; ?></td>
                    <td><?php echo $row->id_project; ?></td>
                    <td><?php echo $row->id_mypro; ?></td>
                    <td><?php echo $row->no_cb; ?></td>
                    <td><?php echo $row->status_po; ?></td>
                    <td><?php echo $row->status_berkas; ?></td>
                    <td><?php echo $row->status_pekerjaan; ?></td>
                    <td><?php echo $row->no_pr; ?></td>
                    <td><?php echo $row->no_po; ?></td>
                    <td><?php echo $row->no_sp; ?></td>
                    <td><?php echo $row->toc; ?></td>
                    <td><?php echo $row->material; ?></td>
                    <td><?php echo $row->jasa; ?></td>
                    <td><?php echo $row->nilai_rekon; ?></td>
                    <td><?php echo $row->paket_pekerjaan; ?></td>
                    <td><?php echo $row->periode; ?></td>
                    <td><?php echo $row->tahun; ?></td>
                    <td><?php echo $row->nilai_bast; ?></td>
                    <td><?php echo $row->tgl_bast; ?></td>
                    
                    <td>
                    <form method="DELETE" action="<?php echo base_url('lister/delete/'.$row->no);?>">
                    <a class="btn btn-primary" href="<?php echo base_url('lister/edit/'.$row->no) ?>"> Edit</a>
                    <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>

                    </td>
                </tr>
            <?php endforeach; ?> 
       
	</table>
    
    <!-- <div class="row">
    	<div class="col">
    		Tampilkan pagination
    		<?php echo $pagination; ?>
    	</div>
    </div> -->
     

</div>
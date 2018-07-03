<!-- Begin page content -->
	<?php
	 	$u_name = $this->session->userdata('uname');
	 	$u_role = $this->session->userdata('urole');
	  	$u_status = $this->session->userdata('ustatus');
	?>
    <div class="container">
    	<div class="row">
      		<div class="col-md-12">
      	  		<h3>Form Inputer</h3>
      		</div>
      		<form name="myform" id="myForm" method="post" action="<?php echo base_url('project/input'); ?>">
      	  		<div class="form-group col-md-3">
      	  			<label for="witel">WITEL</label>
      	  				<select class="form-control input-sm" name="witel" required="required">
      	  	  			<?php if($u_role == 'ADMIN'){ ?>
	      	  				<option value="">-- PILIH WITEL --</option>
				      	  	<option value="ACEH">ACEH</option>
				      	  	<option value="BABEL">BABEL</option>
				      	  	<option value="BENGKULU">BENGKULU</option>
				      	  	<option value="JAMBI">JAMBI</option>
				      	  	<option value="LAMPUNG">LAMPUNG</option>
				      	  	<option value="MEDAN">MEDAN</option>
				      	  	<option value="RIDAR">RIDAR</option>
				      	  	<option value="RIKEP">RIKEP</option>
				      	  	<option value="SUMBAR">SUMBAR</option>
				      	  	<option value="SUMSEL">SUMSEL</option>
				      	  	<option value="SUMUT">SUMUT</option>
				      	  	<option value="REG">REG</option>
				      	<?php } else{ ?>
				      		<option value="<?php echo $u_role; ?>"><?php echo $u_role; ?></option>
				      	<?php } ?>
			      	  	</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="uraian">URAIAN PEKERJAAN</label>
      	  			<textarea class="form-control input-sm" rows="1" name="uraian"></textarea>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="id_deployer">ID DEPLOYER</label>
      	  			<input type="text" class="form-control input-sm" name="id_deployer">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="id_project">ID PROJECT</label>
      	  			<input type="text" class="form-control input-sm" name="id_project">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="id_mypro">ID MYPRO</label>
      	  			<input type="text" class="form-control input-sm" name="id_mypro">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="nomor_cb">NOMOR CB</label>
      	  			<input type="text" class="form-control input-sm" name="nomor_cb">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	    		<label for="status_po">STATUS PO</label>
      	  			<select class="form-control input-sm" name="optone" id="stateSel" size="1" required="required">
        	  			<option value="" selected="selected">-- PILIH STATUS PO --</option>
    				</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="status_berkas">STATUS BERKAS</label>
      	  			<select class="form-control input-sm" class="form-control input-sm" name="opttwo" id="countySel" size="1" required="required">
        	  			<option value="" selected="selected">-- PILIH STATUS BERKAS --</option>
    				</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="status_pekerjaan">STATUS PEKERJAAN</label>
      	  			<select class="form-control input-sm" name="optthree" id="citySel" size="1" required="required">
        	  			<option value="" selected="selected">-- PILIH STATUS PEKERJAAN --</option>
    				</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="nomor_pr">NOMOR PR</label>
      	  			<input type="text" class="form-control input-sm" name="nomor_pr">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="nomor_po">NOMOR PO</label>
      	  			<input type="text" class="form-control input-sm" name="nomor_po">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="nomor_sp">NOMOR SP</label>
      	  			<input type="text" class="form-control input-sm" name="nomor_sp">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="toc">TOC</label>
      	  			<input type="date" class="form-control input-sm" name="toc">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="material">MATERIAL</label>
      	  			<input type="text" class="form-control input-sm" name="material">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="jasa">JASA</label>
      	  			<input type="text" class="form-control input-sm" name="jasa">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="">PAKET PEKERJAAN</label>
      	  			<select class="form-control input-sm" name="paket_pekerjaan" required="required">
		      	  	    <option value="">-- PILIH PAKET PEKERJAAN --</option>
		      	  	    <option value="FTTH">FTTH</option>
		      	  	    <option value="HEM">HEM</option>
		      	  	    <option value="LME NODE B">LME NODE B</option>
		      	  	    <option value="LME WIFI">LME WIFI</option>
		      	  	    <option value="MATERIAL GANGGUAN">MATERIAL GANGGUAN</option>
		      	  	    <option value="MATERIAL GANGGUAN CCAN/WIFI-ID">MATERIAL GANGGUAN CCAN/WIFI-ID</option>
		      	  	    <option value="MATERIAL GANGGUAN CONSUMER">MATERIAL GANGGUAN CONSUMER</option>
		      	  	    <option value="MATERIAL GANGGUAN DATIN">MATERIAL GANGGUAN DATIN</option>
		      	  	    <option value="MATERIAL GANGGUAN NODE B">MATERIAL GANGGUAN NODE B</option>
		      	  	    <option value="MATERIAL PSB">MATERIAL PSB</option>
		      	  	    <option value="MATERIAL REMO">MATERIAL REMO</option>
		      	  	    <option value="PT-2">PT-2</option>
		      	  	    <option value="QE AKSES">QE AKSES</option>
		      	  	    <option value="QE RECOVERY">QE RECOVERY</option>
		      	  	    <option value="QE UTILITAS">QE UTILITAS</option>
      	  			</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="periode">PERIODE</label>
      	  			<select class="form-control input-sm" name="periode" required="required">
      	  	  			<option value="">-- PILIH PERIODE --</option>
		      	  	  	<option value="JAN">JAN</option>
		      	  	  	<option value="FEB">FEB</option>
		      	  	  	<option value="MAR">MAR</option>
		      	  	  	<option value="APR">APR</option>
		      	  	  	<option value="MAY">MAY</option>
		      	  	  	<option value="JUN">JUN</option>
		      	  	  	<option value="JUL">JUL</option>
		      	  	  	<option value="AUG">AUG</option>
		      	  	  	<option value="SEP">SEP</option>
		      	  	  	<option value="OCT">OCT</option>
		      	  	  	<option value="NOV">NOV</option>
		      	  	  	<option value="DEC">DEC</option>
      	  			</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="tahun">TAHUN</label>
      	  			<select class="form-control input-sm" name="tahun" required="required">
      	  	  			<option value="">-- PILIH TAHUN --</option>
      	  	  			<?php
      	  	  				$i = 2010;
      	  	  				for($i;$i<=2030;$i++){
      	  	  			?>
      	  	  			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      	  	  			<?php } ?>
      	  			</select>
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="nilai_bast">NILAI BAST</label>
      	  			<input type="text" class="form-control input-sm" name="nilai_bast">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<label for="tgl_bast">TGL_BAST</label>
      	  			<input type="date" class="form-control input-sm" name="tgl_bast">
      	  		</div>
      	  		<div class="form-group col-md-3">
      	  			<button type="submit" class="btn btn-primary">Submit</button>
      	  		</div>
      		</form>
      	</div>
    </div>
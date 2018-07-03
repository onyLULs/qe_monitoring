<h3>Upload a picture!</h3>
<hr />
 
<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('upload/file_data');?>
 <div class="col-xs-11 col-sm-11 col-md-11">
  <div class="form-group">
    <label for="pic_title">File Title*:</label>
    <input type="text" class="form-control" name="pic_title" value="<?= set_value('pic_title'); ?>" id="pic_title">
  </div>
  <div class="form-group">
    <label for="pic_desc">File Description:</label>
    <textarea name="pic_desc" class="form-control" id="pic_desc"><?= set_value('pic_desc'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="pic_file">Select File*:</label>
    <input type="file" name="pic_file" class="form-control"  id="pic_file">
  </div>
  <a href="<?=base_url();?>" class="btn btn-warning">Back</a>
  <button type="submit" class="btn btn-success">Submit</button></div>
</form>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<!-- <a href="<?=base_url();?>admin/add_staff">Add Staff</a> -->
	<div>
	 
     
       <div class="form-group">
        <div class="col-md-4">
          <a href="<?=base_url();?>admin/" class="btn btn-primary">Back</a>
          <!-- <button  class="btn btn-info">Add New Staff</button> -->
          <a href="<?=base_url();?>/admin/add_staff" class="btn btn-info">Add Staff</a>
        </div>
       </div>

     
	
	</div>

	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>

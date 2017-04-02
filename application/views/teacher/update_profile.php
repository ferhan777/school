<?php
 foreach($row as $user){
  $id=$user['id'];
  $username=$user['username'];
  $password=$user['password'];
  $user_type=$user['user_type'];
  $employ_code=$user['employ_code'];
  $first_name =$user['first_name'];
  $last_name = $user['last_name'];
  $staff_type = $user['staff_type'];
  $approved = $user['approved'];
  $user_id = $user['user_type'];  	
 }
?>
<form class="form-horizontal" method="post" action="<?php echo base_url()?>teachers/update_profile">
<fieldset>

<!-- Form Name -->
<legend>Update Profile</legend>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Employee Code : </label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Code </span>
      <input id="prependedtext" name="employ_code" class="form-control" type="text" value="<?php if(isset($employ_code)){echo $employ_code;};?>" disabled>
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name : </label>  
  <div class="col-md-4">
  <?php echo form_error('first_name'); ?> 
  <input id="textinput" name="first_name" type="text" class="form-control input-md" value="<?php if(isset($first_name)){echo $first_name;};?>">
 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name : </label>  
  <div class="col-md-4">
  <?php echo form_error('last_name'); ?> 
  <input id="textinput" name="last_name" type="text" value="<?php if(isset($last_name)){echo $last_name;};?>" class="form-control input-md">
  
  </div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="submit" type="submit" class="btn btn-success">Update</button>
    <button id="button2id" type"reset" class="btn btn-danger">Clear</button>
  </div>
</div>

</fieldset>
</form>

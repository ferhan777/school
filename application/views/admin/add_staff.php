<form class="form-horizontal" action="<?=base_url();?>admin/add_staff" method="post">
<fieldset>

<!-- Form Name -->
<legend>Add staff</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Employee Code</label>  
  <div class="col-md-4">
   <?php echo form_error('employ_code'); ?>      
  <input id="textinput" name="employ_code" type="text" placeholder="employee code" class="form-control input-md" value="<?php echo set_value('employ_code'); ?>">
 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username</label>  
  <div class="col-md-4">
   <?php echo form_error('username'); ?>      
  <input id="textinput" name="username" type="text" placeholder="username" class="form-control input-md" value="<?php echo set_value('username'); ?>">
 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
   <?php echo form_error('password'); ?>      
    <input id="passwordinput" name="password" type="password" placeholder="password" class="form-control input-md">
   
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm password</label>
  <div class="col-md-4">
     <?php echo form_error('passwordconf'); ?>      
    <input id="passwordinput" name="passwordconf" type="password" placeholder="Confirm password" class="form-control input-md">
   
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Staff Type </label>
  <div class="col-md-4">
   <?php echo form_error('staff_type'); ?>      
    <select id="selectbasic" name="staff_type" class="form-control">
      <option value="">---</option>
      <option value="pteacher">Permanant Teacher</option> <!-- These should be turned to dynamic forms-->
      <option value="gteacher">Guest teacher</option>
      <option value="clerk">Clerk</option>
      <option value="accnt">accountant</option>
    </select>
  </div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" type="submit" class="btn btn-success">Add staff</button>
    <button id="button2id" name="button2id" type="reset" class="btn btn-danger">Reset</button>
  </div>
</div>
<!--
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput"></label>
  <div class="col-md-2">
     <input type="submit" class="form-control input-md" class="btn btn-success"> 

  
  </div>
  <div class="col-md-2">
    <input type="reset" class="form-control input-md" value="Reset">
  </div>
</div>
-->

</fieldset>
</form>

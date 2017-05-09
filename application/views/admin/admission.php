<center><b>Admission Form</b> <br><br></center>
<form class="form-horizontal">

<fieldset>

<!-- Form Name -->
<!-- <legend>Admission</legend>
 -->
<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Admission No </label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">AdmNo</span>
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Admission No" type="text">
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">First Name : </label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Last Name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DOB">DOB</label>  
  <div class="col-md-4">
  <input id="DOB" name="DOB" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Gender-0">
      <input type="radio" name="Gender" id="Gender-0" value="0" checked="checked">
      Male
    </label>
  </div>
  <div class="radio">
    <label for="Gender-1">
      <input type="radio" name="Gender" id="Gender-1" value="1">
      Female
    </label>
  </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="father_name">Father's Name</label>  
  <div class="col-md-4">
  <input id="father_name" name="father_name" type="text" placeholder="Father's Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mother_name">Mother's Name</label>  
  <div class="col-md-4">
  <input id="mother_name" name="mother_name" type="text" placeholder="Mother's Name" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bgroup">Blood Group</label>
  <div class="col-md-4">
    <select id="bgroup" name="bgroup" class="form-control">
      <option value="1">A+</option>
      <option value="2">A-</option>
      <option value="">O+</option>
      <option value="">O-</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="raddress">Residential Adress</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="raddress" name="raddress"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="paddress">Permanent adress</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="paddress" name="paddress"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="landline"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Land Line</span>
      <input id="landline" name="landline" class="form-control" placeholder="" type="text">
    </div>
    
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mobile"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Mobile</span>
      <input id="mobile" name="mobile" class="form-control" placeholder="" type="text">
    </div>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="identity">Identification marks:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="identity" name="identity"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="class">Class</label>  
  <div class="col-md-4">
  <input id="class" name="class" type="text" placeholder="Class" class="form-control input-md">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
  </div>
</div>

</fieldset>
</form>

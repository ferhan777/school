<?php
 //echo "<pre>";
 //print_r($staffs);
 //echo "</pre>";
 
  
?>
<br><br>
<div class="container">
<table class="table-bordered table-hover table-condensed table-responsive">
	<thead>
		<tr>
			<th>Emp.Code</th>
			<th>Name</th>
		    <th>type</th>
			<th>Assign Duty</th>
		</tr>
	</thead>
	<tbody>
	<tr>
	 <?php
	  foreach($staffs as $staff){
       echo "<td>";
       echo $staff->employ_code;
       echo "</td>";

       echo "<td>";
       echo $staff->first_name." ".$staff->last_name;
       echo "</td>";

    

       echo "<td>";
       echo $staff->staff_type;
       echo "</td>";
       
       echo "<td>";
       echo anchor('test/tt/'.$staff->id, 'Add task');
       echo "</td>";

       echo "</tr></tbody>";
	  }
	  
	 ?>
     
	
		
</table>
</div>
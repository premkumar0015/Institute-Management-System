<html>
	<head>
            <link rel="stylesheet" type="text/css" href="style.css">
    </head>
 
<script>

function checkform(pform1){
if(pform1.empId.value==""){
alert("Please enter employee id");
pform1.empId.focus();
return false;
}
return true;
}	
function show_confirm()
{
  var r = confirm("Are you sure?");
  if(r == true)
  {
     // do something
     return true;
  } else {
     // do something
     return false;
  }

}
</script> 
<form action="deletestudent.php" method="post" id="abc"  onsubmit="return checkform(this);" >

<div class="m"><h2><marquee behavior="scroll" direction="left" >INSTITUTE MANAGEMENT SYSTEM ....</marquee></h2></div>

<div class="ex">

<pre>
	
             STUDENT ID :    <input type="text" name="enquiryid" autofocus>
	
             <input type="submit" name="delete"  onclick="return show_confirm()" value="delete"class="button1">
</pre>
</div>	
</form>

<?php
include('connection.php');
if(isset($_POST['delete'])){
           $id=$_POST["enquiryid"];
		   echo "$id";
	mysql_query("delete from enquiry where enquiryid='$id'");
        echo "deleted";
}

?>
<html>
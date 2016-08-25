<?php
include("adminheader1.php");
?>
<html>
<head>
</head>
<body>
<form action="#" method="post">

        <table id="table1" align="center"width="500px">
			
                <tr>
				<td>Enter Student Id:</td>
				<td><input type="text" name="studentid"></td>
				</tr>
				
                <tr>
				<td>Enter Batch Id:</td>
				<td><input type="text"name="batchid"></td>
				</tr>
				
                <tr>
				<td>Enter Fee:</td>
				<td><input type="text"name="feepaid" ></td>
				</tr>
				
				<tr>
				<td>Enter Date:</td>
				<td><input type="Date" name="date" min="2015-04-10"max="2015-04-10"></td>
				</tr>
	
	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit" /></td> 
					<td><input type="reset" /></td>
					</tr>
</form>

</body>
</html>

<?php
include('connection.php');
if(isset($_POST['submit']))
{
$studentid=$_POST['studentid'];
$batchid=$_POST['batchid'];
$feepaid=$_POST['feepaid'];
$query=mysql_query("select sbid from studentbatch where studentid='$studentid' and batchid='$batchid'");
while($result=mysql_fetch_array($query))
{
echo $sbid=$result['sbid'];
}
echo $sbid;
$date=$_POST['date'];
mysql_query("INSERT INTO fee (feepaid,sbid,date) values ('$feepaid','$sbid','$date')");
}?>
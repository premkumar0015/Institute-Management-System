<?php
include("adminheader1.php");
?>
<html>
<?php
include('connection.php');
?>
<head>
<style type="text/css">
#s1
{
color:green;
}
</style>
</head>
<body>
<h2 id="s1"align="center">Show The Fee Details Of Student How much the student paid And how much Due </h2>
<a href='adminheader1.php'>HOME</a>
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
					<td></td>
					<td><input type="submit" name="submit" value="submit" /></td> 
					<td><input type="reset" /></td>
					</tr>
</form>
</body>

<?php
include('connection.php');
if(isset($_POST['submit']))
{
$sid=$_POST['studentid'];
$batchid=$_POST['batchid'];
$qu=mysql_query("SELECT fee FROM `course` WHERE courseid=(select courseid from batch where batchid='$batchid')");
$query=mysql_query("SELECT sum(feepaid) FROM `fee` WHERE sbid=(select sbid from studentbatch where studentid='$sid' and batchid='$batchid')");
while($result=mysql_fetch_array($qu))
{
	$coursefee=$result['fee'];
}
while($result1=mysql_fetch_array($query))
{
$feepaid=$result1['sum(feepaid)'];
}

$due = $coursefee - $feepaid;
//print($due);
}
?>

<table border="1" width="100%" cellspacing="0" cellpadding="3">
<tr>
<th>Course fee</th><th>Total paid</th><th>Fee due</th>
</tr>
<tr>
<td><?php echo @$coursefee;?></td><td><?php echo @$feepaid;?></td><td><?php echo @$due;?></td>
</tr>
</table>
</html>

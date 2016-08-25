<?php
include('adminheader1.php')
?>

<?php
@mysql_connect('localhost','root','') or die('please check username or password');
@mysql_select_db('imsproject')or die('Not Connected to Database');

if(isset($_GET['submit']))
{
 $id=$_GET['sid'];
$query="select * from student where studentid='$id'";

$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
	$stid=$row['studentid'];
    $sname=$row['name'];
    $college=$row['college'];
	$seme=$row['semester'];
	$mobi=$row['mobile'];
	$address=$row['address'];
	$date=$row['joindate'];
}

?>
<html>
<head>
<title>Update Information</title>
</head>
<body>

<form action="edit1.php?edit_id=<?php echo $stid; ?>" method="post">
<table border="5" width="500" align="center">
<tr>
<td align="center" bgcolor="yellow" colspan="5"><h1>Update Student Information</h1></td>
</tr>
<tr>
<td align="right">Student Name</td>
<td ><input type="text" name="name" value="<?php echo $i=$sname ?>"></td>
</tr>
<tr>
<td align="right">Student College</td>
<td ><input type="text" name="col" value="<?php echo $college; ?>"></td>
</tr>
<tr>
<td align="right">Semester</td>
<td ><input type="text" name="sem" value="<?php echo $seme; ?>"></td>
</tr>
<tr>
<td align="right">Mobile No.</td>
<td ><input type="text" name="mob" value="<?php echo $mobi; ?>"></td>
</tr>
<tr>
<td align="right">Address</td>
<td ><input type="text" name="add" value="<?php echo $address; ?>"></td>
</tr>
<tr>
<td align="right">Date</td>
<td ><input type="text" name="dat" value="<?php echo $date; ?>"></td>
</tr>
<tr>
<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
</tr>


</table>
</form>
<body>
</html>
<?php }  ?>

<?php 
@mysql_connect('localhost','root','') or die('please check username or password');
@mysql_select_db('imsproject')or die('Not Connected to Database');

if(isset($_POST['update']))
{
	$ed_id=$_GET['edit_id'];
	$name=$_POST['name'];
	$college=$_POST['col'];
	$sem=$_POST['sem'];
	$mob=$_POST['mob'];
	$addr=$_POST['add'];
	$date=$_POST['dat'];
	
	$query="update student set name='$name',college='$college',semester='$sem',mobile='$mob',address='$addr',joindate='$date' where studentid='$ed_id' ";
	if(mysql_query($query))
	{
		echo '<script>window.open("edit.php?updated=Data has been updated...","_self")</script>';
	}
	
	
	
}


?>
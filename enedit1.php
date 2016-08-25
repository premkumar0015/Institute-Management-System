<?php

@mysql_connect('localhost','root','') or die('please check username or password');
@mysql_select_db('imsproject')or die('Not Connected to Database');

if(isset($_POST['submit']))
{
echo $id=$_POST['eid'];
$query="select * from enquiry where enquiryid='$id'";

$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
	$eid=$row['enquiryid'];
    $sname=$row['name'];
	$cou=$row['course'];
	$mobi=$row['mobile'];
	$email=$row['email'];
    $college=$row['collage'];
	$date=$row['date'];
	$comment=$row['comment'];
	$address=$row['address'];
	$branch=$row['branch'];
	
}

?>
<html>
<head>
<title>Update Enquiry</title>
</head>
<body>

<form action="enedit1.php?edit_id=<?php echo $eid; ?>" method="post">
<table border="5" width="500" align="center">
<tr>
<td align="center" bgcolor="yellow" colspan="5"><h1>Update Student Enquiry</h1></td>
</tr>
<tr>
<td align="right">Student Name</td>
<td><input type="text" name="name" value="<?php echo $sname; ?>"></td>
</tr>


<tr>
<td align="right">Course</td>
<td><input type="text" name="course" value="<?php echo $cou; ?>"></td>
</tr>

<tr>
<td align="right">Mobile No.</td>
<td><input type="text" name="mobile" value="<?php echo $mobi; ?>"></td>
</tr>

<tr>
<td align="right">E-mail</td>
<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
</tr>

<tr>
<td align="right">Student College</td>
<td ><input type="text" name="college" value="<?php echo $college; ?>"></td>
</tr>

<tr>
<td align="right">Date</td>
<td ><input type="text" name="date" value="<?php echo $date; ?>"></td>
</tr>

<tr>
<td align="right">Comment</td>
<td ><input type="text" name="comment" value="<?php echo $comment; ?>"></td>
</tr>

<tr>
<td align="right">Address</td>
<td ><input type="text" name="address" value="<?php echo $address; ?>"></td>
</tr>

<tr>
<td align="right">Branch</td>
<td ><input type="text" name="branch" value="<?php echo $branch; ?>"></td>
</tr>


<tr>
<td align="center" colspan="5"><input type="submit" name="submit" name="update" value="Update Now"></td>
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
	$ed_id=$_POST['edit_id'];
	$name=$_POST['name'];
	$course=$_POST['course'];
	$mob=$_POST['mobile'];
	$email=$_POST['email'];
	$college=$_POST['college'];
	$sem=$_POST['date'];
    $mob=$_POST['comment'];	
	$addr=$_POST['address'];
	$date=$_POST['branch'];
	
	$query="update student set sname='$name',college='$college',semester='$sem',mobile='$mob',address='$addr',date='$date' where studentid='$ed_id' ";
	if(mysql_query($query))
	{
		echo '<script>window.open("edit.php?updated=Data has been updated...","_self")</script>';
	}
	
	
	
}


?>
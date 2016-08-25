<?php
include('connection.php');
?>
<head>
<style type="text/css">
#hw
{
color:green;
}
</style>
</head>
<body>
<a href='adminheader1.php'>HOME</a>
<h1 id="hw" align="center"><br>Show complete Details of all the studens study this batch</h1>

<form action="#" method="post">

<pre>
	
             Batch Id : <input type="text" name="batchid" autofocus>
	
             <input type="submit" name="submit"  onclick="return show_confirm()" value="search"class="button1">
</pre>

</form>


<table id="dataTable" border="1" width="100%" cellspacing="0" cellpadding="3">

<tr>
<th>StudentId</th><th>Name</th><th>College</th><th>Semester</th><th>Mobile</th><th>Address</th><th>Date</th>
</tr>
<?php
if(isset($_POST['submit']))
{
$batchid=$_POST['batchid'];
$query=mysql_query("SELECT * FROM `student` WHERE studentid in(select studentid from studentbatch where batchid='$batchid')");
//mysql_query("SELECT count(*) FROM `student` WHERE studentid in(select studentid from studentbatch where batchid='$batchid')");
while($result=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $result['studentid'];?></td><td><?php echo $result['name'];?></td><td><?php echo $result['college'];?></td><td><?php echo $result['semester'];?></td>
<td><?php echo $result['mobile'];?></td><td><?php echo $result['address'];?></td><td><?php echo $result['joindate'];?></td>
</tr>
<?php }} ?>
</body>
</table>
</html>
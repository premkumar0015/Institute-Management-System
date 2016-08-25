<?php
include("adminheader1.php");
?>
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
<h1 id="hw" align="center"><br>Show Batchid with the help of student id</h1>
<form action="#" method="post">

<pre>
	
             Student Id : <input type="text" name="studentid" autofocus>
	
             <input type="submit" name="submit"  onclick="return show_confirm()" value="search"class="button1">
</pre>

</form>


<table id="dataTable" border="1" width="50%" cellspacing="0" cellpadding="3">

<tr>
<th>Batch Id</th>
</tr>
<?php
if(isset($_POST['submit']))
{
$studentid=$_POST['studentid'];
$query=mysql_query("select batchid from studentbatch where studentid='$studentid'");
//mysql_query("SELECT count(*) FROM `student` WHERE studentid in(select studentid from studentbatch where batchid='$batchid')");
while($result=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $result['batchid'];?></td>
</tr>
<?php }} ?>
</body>
</table>
</html>
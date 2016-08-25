<html>
<head>
<title>Edit Enquiry</title>
</head>
<body>
<form action="enedit1.php" method="post">
<table border="5" width="500" align="center">
<tr>
<td align="center" bgcolor="yellow" colspan="5"><h1>Edit Student Enquiry</h1></td>
</tr>
<tr>
<td align="right">Enter Enquiry ID</td>
<td ><input type="text" name="eid"></td>
</tr>
<tr>
<td align="center" colspan="5"><input type="submit" name="submit" value="Edit Information"></td>
</tr>


</table>
</form>
<h1 align="center"><?php echo @$_POST['updated']; ?></h1>

</body>
</html>


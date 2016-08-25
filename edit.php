<?php
include('adminheader1.php')
?>
<html>
<head>
<title>Edit Information</title>
</head>
<body>
<form action="edit1.php" method="get">
<table border="5" width="500" align="center">
<tr>
<td align="center" bgcolor="yellow" colspan="5"><h1>Edit Student Information</h1></td>
</tr>
<tr>
<td align="right">Enter Student ID</td>
<td ><input type="text" name="sid"></td>
</tr>
<tr>
<td align="center" colspan="5"><input type="submit" name="submit" value="Edit Information"></td>
</tr>


</table>
</form>
<h1 align="center"><?php echo @$_GET['updated']; ?></h1>

</body>
</html>


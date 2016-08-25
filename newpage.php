<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Learn is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>Learn - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	body,td,th {
	font-family: Lato, sans-serif;
	font-size: 14px;
}
    </style>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body bgcolor="#0099FF">
	<!-- Fixed navbar -->
	
			
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>INSTITUTE MANAGEMENT SYSTEM</h1>
				</div>
			</div>
		</div>
	</header>
<div id="section">
<section class="container">

	<form name="form1" method="post" action="">
	  <ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a class="MenuBarItemSubmenu" href="#">Student Management</a>
          <ul>
            <li> <a href="#">Add New Student </a></li>
<li><a href="#">Edit Exiting Student.</a></li>
<li><a href="selects.php">View All Students</a></li>
<li><a href="#">Delete Studdent</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Enquiry Management</a>
          <ul>
<li><a href="enquery.php">Add Enquiry</a></li>
            <li><a href="selecte.php">View Enquery</a></li>
            <li><a href="#">Edit Enquiry</a></li>
            <li><a href="#">Delete Enquiry</a></li>
          </ul>
        </li>
        <li><a class="MenuBarItemSubmenu" href="#">Batch Management</a>
          <ul id="abc">
            <li><a href="#">Add New batch</a>            </li>
            <li><a href="#">Comming Soon</a></li>
            <li id="abc1"><a href="#">soon</a></li>
          </ul>
        </li>
        <li><a href="#">Fee Management</a>        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Search</a>
          <ul>
            <li><a href="#">search student</a></li>
          </ul>
        </li>
        <li><a href="login.php".php">Logout</a></li>
	  </ul>
  </form>
</div>
<body>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<?php
if(isset($_POST['submit']))
{
$uname=$_POST['username'];
$pass=$_POST['pwd'];
//$encrypted_mypassword=md5($mypassword);
//$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
//$result=mysql_query($sql);

$encrypted_mypassword=md5($pass);
$sql="SELECT count(*) FROM user WHERE(username='".$uname."'and password='".$encrypted_mypassword."')";

//$sql="SELECT count(*) FROM user WHERE(username='".$uname."'and password='".$pass."')";
$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);
if($result[0]>0)
{
echo "sucessful login";
$_SESSION['username']=$uname;
echo "</br >Welcome ".$_SESSION['username']."";
echo "</br ><a href='logout.php'>Logout</a>";
}
else
{
echo "login failed";
echo "</br ><a href='login.php'>Logout</a>";
}
}
?>
</html>
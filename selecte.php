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
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
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
	
	<h2>Table Filter</h2>

	<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">

<table aling="center"width="100%" border='1'class="order-table" cellpadding='10'>
<tr>
<th>Name</th><th>Course</th><th>Mobile</th><th>Email</th><th>Collage</th><th>Date</th><th>Comment</th><th>Address</th><th>Branch</th>
</tr>
<?php
$query=mysql_query("select * from enquiry order by date");
while($result=mysql_fetch_array($query))
{
?>
<tr>
<td><?php echo $result['name'];?></td><td><?php echo $result['course'];?></td><td><?php echo $result['mobile'];?></td><td><?php echo $result['email'];?></td><td><?php echo $result['collage'];?></td><td><?php echo $result['date'];?></td><td><?php echo $result['comment'];?></td>

<td><?php echo $result['address'];?></td><td><?php echo $result['branch'];?></td>
</tr>
<?php } ?>
</table>
</div>
</section>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<script type="text/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
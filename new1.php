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
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="courses.php">Courses</a></li>
					<li class="active"><a href="fees.html">Fees</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->


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

				<section class="col-sm-12 maincontent">
				<!--<h3>All Student Details</h3>-->
	<!-- /container -->

	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Your Message</h3>
						<p>
						Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						
						<form action="enquery.php" class="form-light mt-20" role="form" method="post">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" maxlength="30" name="name" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control"maxlength="30" name="email" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" name="mobile" maxlength="10" placeholder="Phone number">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label>College:</label>
								<input type="text" class="form-control"name="collage" placeholder="college">
							</div>
							
							<div class="form-group">
								<label>Date:</label>
								<input type="date" class="form-control"name="date" placeholder="date">
							</div>
							
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control"name="address"placeholder="address">
							</div>
				<div class="form-group">		
				<label>Courses:</label>
				<select name="course"class="form-control">
				    <option>C</option>
					<option>C++</option>
					<option>CORE JAVA</option>
					<option>ADVANCE JAVA</option>
					<option>ORACLE</option>
					<option>PHP</option>
					<option>MYSQL</option>
					<option>DATA STEUCTURE</option>
					<option>PROJECT</option>
				    </select>
					</div>
					
					<div class="form-group">
					<label>Branch:</label>
				    <select name="branch"class="form-control">
				    <option>Mansarover</option>
					<option>Indrapuri</option>
					<option>Ahemadabad</option>
				    </select> 

					</div>
					
							
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control"name="comment" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
						
							<button type="submit"value="submit"name="submit" class="btn btn-two">Submit</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Office Address</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>5th Street, Carl View - United States</p>
									
									<h5>Email</h5>
									<p>info@webthemez.com</p>
									
									<h5>Phone</h5>
									<p>+09 123 1234 123</p>
								</div>
							</div>
							<div class="col-md-6">
								<h3 class="section-title">Timings</h3>
								<div class="contact-info">
									<h5>Monday - Friday</h5>
									<p>09:00 AM - 6:30 PM</p>
									
									<h5>Saturday</h5>
									<p>Closed</p>
									
									<h5>Sunday</h5>
									<p>Closed</p>
								</div>
							</div>
						</div>
						<h3 class="section-title">Get connected</h3>
						<p>
						Lorem ipsumn qersl ioinm sersoe non urna dolor sit amet, consectetur piesn qersl ioinm sersoe non urna dolor aecena.
						</p>						
					</div>
				</div>
			</div>
	<!-- /container -->


	


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>

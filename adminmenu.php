<head>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	line-height: normal;
	text-transform: none;
	width: auto;
	position: static;
	float: none;
	clear: none;
}
    </style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<div id="section">
<section class="container">

	<form name="form1" method="post" action="">
	  <div align="left">
	    <ul id="MenuBar1" class="MenuBarHorizontal">
	      <!--<li><a href="#">Home</a></li> -->
	      <li><a class="MenuBarItemSubmenu" href="#">Student Management</a>
	        <ul>
	          <li> <a href="registration.php">Add New Student </a></li>
			  <li> <a href="edit.php">Update Student Info</a></li>
	          <li><a href="addoldstudent.php">Edit Exiting Student.</a></li>
	          <li><a href="selects.php">View All Students</a></li>
	          <li><a href="deletestudent.php">Delete Studdent</a></li>
            </ul>
          </li>
	      <li><a href="#" class="MenuBarItemSubmenu">Enquiry Management</a>
	        <ul>
	          <li><a href="enqueryadmin.php">Add Enquiry</a></li>
	          <li><a href="viewenq.php">View Enquery</a></li>
	          <li><a href="#">Edit Enquiry</a></li>
	          <li><a href="deleteenquery.php">Delete Enquiry</a></li>
            </ul>
          </li>
	      <li><a class="MenuBarItemSubmenu" href="#">Batch Management</a>
	        <ul id="abc">
	          <li><a href="addnewbatch.php">Add New batch</a> </li>
	          <li><a href="selectbatch.php">view all batch</a></li>
	          <li id="abc1"><a href="#">soon</a></li>
            </ul>
          </li>
	      <li><a href="#" class="MenuBarItemSubmenu">Fee Management</a>
	        <ul>
              <li><a href="feepay.php">pay fee</a></li>
              <li><a href="feedue.php">Fees due</a></li>
              <li><a href="#">comming soon</a></li>
	        </ul>
	      </li>
	      <li><a href="#" class="MenuBarItemSubmenu">Search</a>
	        <ul>
              <li><a href="searchbybachid.php">batchinfo by batchid</a></li>
              <li><a href="searchbatchid.php">search batchid</a></li>
	        </ul>
          </li>
	      <li><a href="#" class="MenuBarItemSubmenu">course</a>
	        <ul>
	          <li><a href="addnewcourse.php">Add New Course</a></li>
	          <li><a href="selectcourse.php">View all Course</a></li>
	          <li><a href="#">comming soon</a></li>
            </ul>
          </li>
	      <li><a href="login.php".php">Logout</a></li>
        </ul>
      </div>
  </form>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<?php
include("adminheader1.php");
?>
<div id="section">
<?php
include('connection.php');
if(isset($_POST['submit']))
{
$studentid=$_POST['studentid'];
$batchid=$_POST['batchid'];
$branchid=$_POST['branchid'];
//mysql_query("INSERT INTO student (studentid,name,college,semester,mobile,address,email,joindate) values ('$studentid','$name','$college','$semester','$mobile','$address','$email','$date')");
mysql_query("INSERT INTO studentbatch(studentid,batchid,branchid) values('$studentid','$batchid','$branchid')");
//mysql_query("INSERT INTO enquiry VALUES ('$_post['name']','$_post['course']','$_post['mobile']','$_post['email']','$_post['collage']','$_post['date']','$_post['comment']','$_post['address']','$_post['branch']')"); 
}
?>

<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 align="center"class="section-title">ADD Existing STUDENT New batch</h3>
						<form  action="#" class="form-light mt-20" role="form" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Student ID:</label>
										<input type="text" class="form-control"maxlength="5" name="studentid" placeholder="student ID">
									</div>
							        </div>
							      </div>
					<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					<label>Batch ID:</label>
				    <select name="batchid"class="form-control">
				    <option>c101</option>
					<option>java1</option>
					<option>php1</option>
					<option>4</option>
				    </select> 
					</div>
					</div>
								<div class="col-md-6">
									<div class="form-group">
						<label>Branch ID:</label>
						<select name="branchid"class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						</select>
							</div>
							</div>
					</div>
							<button type="submit"value="submit" name="submit" class="btn btn-two">Submit</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Batch ID</h3>
								<div class="contact-info">
									<h5>c101</h5>
									<h5>java1</h5>
							
									<h5>php1</h5>
								
								</div>
							</div>
							<div class="col-md-6">
								<h3 class="section-title">Timings</h3>
								<div class="contact-info">
									<h5>M.W.F(6:30pm)</h5>
									
									<h5>M.W.F(9:30am)</h5>
									
									
									<h5>T.T.S(9:30)</h5>
								
								</div>
							</div>
						</div>
						<h3 class="section-title">Branch ID</h3>
						<p>
						1-Mansarober
						2-Indrepuri
						3-Amahadabad
						</p>						
					</div>
				</div>
				
			</div>
	<!-- /container -->

	

	<footer id="footer">
		<div class="container">
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="courses.php">Courses</a> |
								<a href="fees.php">Fees</a> |
								<a href="portfolio.php">Portfolio</a> |
								<a href="contact.php">Contact</a>  |
								<a href="enquery.php">Enquiry</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2014. Template by <a href="http://webthemez.com/" rel="develop">prem kumar</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>


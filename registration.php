<?php
include("adminheader1.php");
?>
<div id="section">
<?php
include('connection.php');
if(isset($_POST['submit']))
{
$studentid=$_POST['studentid'];
$name=$_POST['name'];
$college=$_POST['college'];
$mobile=$_POST['mobile'];
$semester=$_POST['semester'];
$address=$_POST['address'];
$date=$_POST['date'];
$email=$_POST['email'];
$batchid=$_POST['batchid'];
$branchid=$_POST['branchid'];
mysql_query("INSERT INTO student (studentid,name,college,semester,mobile,address,email,joindate) values ('$studentid','$name','$college','$semester','$mobile','$address','$email','$date')");
mysql_query("INSERT INTO studentbatch(studentid,batchid,branchid) values('$studentid','$batchid','$branchid')");
//mysql_query("INSERT INTO enquiry VALUES ('$_post['name']','$_post['course']','$_post['mobile']','$_post['email']','$_post['collage']','$_post['date']','$_post['comment']','$_post['address']','$_post['branch']')"); 
}
?>

<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 align="center"class="section-title">ADD NEW STUDENT</h3>
						<p>
						
						</p>
						
						<form  action="registration.php" class="form-light mt-20" role="form" method="post" onsubmit="return validate()">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Student ID:</label>
										<input type="text" class="form-control"maxlength="5" id="sid" name="studentid" placeholder="student ID">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Name:</label>
										<input type="text" class="form-control" name="name" id="name" maxlength="30" placeholder="Name:">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>College:</label>
										<input type="text" class="form-control"maxlength="30"id="college" name="college" placeholder="college">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Semester:</label>
										<input type="text" class="form-control" name="semester"id="sem" maxlength="2" placeholder="semester:">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Mobile:</label>
										<input type="text" class="form-control" maxlength="10" name="mobile" id="mobile" placeholder="mobile">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Date:</label>
										<input type="date" class="form-control" name="date"   id="date" placeholder="Date of Addmission:">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control"id ="add" name="address"placeholder="Address">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input type="text" class="form-control" name= "email"id="email" placeholder="email">
							</div>
							
					<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					<label>Batch ID:</label>
				    <select name="batchid" class="form-control">
					<?php
					$con=mysqli_connect('localhost','root');
					mysqli_select_db($con,'imsproject');
					$q="select batchid from batch";
                    $result=mysqli_query($con,$q);
                    $row_count=mysqli_num_rows($result);
                    for($i=1;$i<=$row_count;$i++)
						{
							$row=mysqli_fetch_array($result);
							?>
					<option><?php echo $row['batchid'];?></option>
 
					<?php } ?>
				    </select> 
					</div>
					</div>
								<div class="col-md-6">
									<div class="form-group">
						<label>Branch ID:</label>
						<select name="branchid"class="form-control">
						<?php
					$con=mysqli_connect('localhost','root');
					mysqli_select_db($con,'imsproject');
					$q="select branchid from branch";
                    $result=mysqli_query($con,$q);
                    $row_count=mysqli_num_rows($result);
                    for($i=1;$i<=$row_count;$i++)
						{
							$row=mysqli_fetch_array($result);
							?>
					<option><?php echo $row['branchid'];?></option>
 
					<?php } ?>
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
									<h5>M.W.F(6:30)</h5>
									<h5>M.W.F(9:30)</h5>
									
									
									<h5>T.T.S(9:30)</h5>
									
								</div>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Branch ID</h3>
								<div class="contact-info">
									<h5>1</h5>
									<h5>2</h5>
									<p>3</p>
									
								
								</div>
							</div>
							<div class="col-md-6">
								<h3 class="section-title">Branch Name</h3>
								<div class="contact-info">
									<h5>Mansarober</h5>
									<h5>Indrapuri</h5>
									<h5>Amehadabad</h5>
									
									
								</div>
							</div>
											
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
								Copyright &copy; 2014. Template by <a href="http://premkumar0015@gmail.com/" rel="develop">prem kumar</a>
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

<script type="text/javascript">



		function formSid()
{
if(document.getElementById("sid").value=="")
{
alert("Please Enter Student id");
document.getElementById("sid").focus();
return 1;
}
else
return 0;
}
        function formName()
        {
            var i;
            var x = document.getElementById("name").value;
            //var y = x.length;
            if (document.getElementById("name").value == "") {
                alert("Please Enter Name of Applicant");
                document.getElementById("name").focus();
                return 1;
            }
           
            else 
            {
                
                for(i = 0; i < x.length; i++)
                {
                    if (x.charAt(i) == '1' || x.charAt(i) == '2' || x.charAt(i) == '3' || x.charAt(i) == '4' || x.charAt(i) == '4' || x.charAt(i) == '5' || x.charAt(i) == '6' || x.charAt(i) == '7' || x.charAt(i) == '8' || x.charAt(i) == '9' || x.charAt(i) == '0' || x.charAt(i) == '@' || x.charAt(i) == '!')
                    {
                        alert("Please Enter Valid Name");
                        return 1;
                    }
                }
            }
            if(i==x.length)
                return 0;
        }
		
		
		
		function formCollege()
{
if(document.getElementById("college").value=="")
{
alert("Please Enter College name");
document.getElementById("college").focus();
return 1;
}
else
return 0;
}

function formSem()
{
if(document.getElementById("sem").value=="")
{
alert("Please Enter semester ");
document.getElementById("sem").focus();
return 1;
}
else
return 0;
}
				
		 function formMobile()
        {
            var x2 = document.getElementById("mobile").value;
            if (x2 == "") {
                alert("Enter Your Mobile No.");
                document.getElementById("mobile").focus();
                return 1;
            }
            else
                return 0;
            if (x2.length == 10)
            {
                for (var i = 0; i < x2.length ; i++)
                {
                    if (i == 0)
                    {
                        if (x2.charAt(i) == '1' || x2.charAt(i) == '2' || x2.charAt(i) == '3' || x2.charAt(i) == '4' || x2.charAt(i) == '5' || x2.charAt(i) == '6' || x2.charAt(i) == '7' || x2.charAt(i) == '8' || x2.charAt(i) == '9')
                            continue;
                        else
                        {
                            alert("Please Enter Digit only");
                            document.getElementById("mobile").value = "";
                            return 1;
                        }
                    }
                    else if (i >= 1)
                    {
                        if (x2.charAt(i) == '0' || x2.charAt(i) == '1' || x2.charAt(i) == '2' || x2.charAt(i) == '3' || x2.charAt(i) == '4' || x2.charAt(i) == '5' || x2.charAt(i) == '6' || x2.charAt(i) == '7' || x2.charAt(i) == '8' || x2.charAt(i) == '9')
                            continue;
                        else
                        {
                            alert("Please Enter Digit only");
                            document.getElementById("mobile").value = "";
                            return 1;
                        }
                    }

                }
            }
            else
            {
                alert("Please Enter 10 digits");
                document.getElementById("mobile").value = "";
                return 1;
            }
        }

		
		function formDate()
        {
            if (document.getElementById("date").value == "")
            {
                alert("Enter Your today Date");
                document.getElementById("date").focus();
                return 1;
            }
           
else
return 0;
        
        }

		
		
		
		function formAdd()
{
if(document.getElementById("add").value=="")
{
alert("Please Enter Address");
document.getElementById("add").focus();
return 1;
}
else
return 0;
}


	  function formEmail()
        {
            var mail = document.getElementById("email");
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(document.getElementById("email").value=="")
{
alert("please enter email address");
return 1;
}
else
{
            if (!filter.test(mail.value))
            {
                alert("Please provide a Valid Email Address");
                document.getElementById("email").focus();
                return 1;
            }
            else
                return 0;
        } 
}


       
	
		
        var count = 0;
        function validate()
        {
            if(count==0)
            {
                var v1 = formSid();
            }
            else 
                return false;
            			
				if(v1==0)
            var v2=formName();
             else 
                  return false;
				  
				  if(v2==0)
                var v3=formCollege();
            else 
                return false;
				
				if(v3==0)
         var v4=formSem();
          else 
             return false;
			 
			 if(v4==0)
         var v5=formMobile();
          else 
             return false;
			 
			 if(v5==0)
         var v6=formDate();
          else 
             return false;
			 
			 if(v6==0)
         var v7=formAdd();
          else 
             return false;
			 
			 		
				if(v7==0)
            var v8=formEmail();
             else 
                  return false;
			 
            
                                     	            
if(v9==0)
return true;
else
return false;
}		   
</script>
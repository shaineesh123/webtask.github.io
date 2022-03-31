
<!DOCTYPE HTML>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="boot.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css1.css" rel="stylesheet" type="text/css"/>
<link href="cssdbms.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="java.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>



<?php
        session_start();
         $servername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "educretinfo";
        $conn =  mysqli_connect($servername, $username,  $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }


             if(isset($_POST['login'])){
				$myemail=$_POST['email'];
				 $mypass=$_POST['pass12'];
				

               $sql="select * from employeeinfo where email='".$myemail."' AND pass='".$mypass."'";
               
               $result = mysqli_query($conn,$sql);
               if(mysqli_num_rows($result)==1)
               {
				echo '<script>alert("Logged In")</script>';
				echo "<script> window.location.assign('admin.php'); </script>";

               }
               else{
				echo '<script>alert("User Is Not Registered,Please register")</script>';
				echo "<script> window.location.assign('signup.php'); </script>";

               }

            }


        ?>


<style>
.text-muted{
	text-align: center;
	font-size: 40px;
}
body {
  background-image: url('bckground.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

</style>

</head>
<body>


<header class="section-header">
<section class="header-main border-bottom">
	<div class="container">

	
		
		<center>
		<span class="text-muted">Welcome Admin</span>
	
			</center>
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-12">
		
			<div class="input-group w-100">
			    
			    <div class="input-group-append">
			     
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<center>
			
			<div class="widget-header icontext">
			
				<div class="text" style="text-align:center;">
					
					<div> 
					
					</div>
				</div>
			</div>

		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

<!-- ============================ COMPONENT LOGIN   ================================= -->
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4" style="text-align:center;">Admin login</h4>


      <form action="" method="POST">
	  		<div class="form-group">
			<input name="email" class="form-control" placeholder="email" type="email" required>
            </div>
          <!-- form-group// -->
          <div class="form-group">
			<input name="pass12" class="form-control" placeholder="Password" type="password" required>
          </div> <!-- form-group// -->
		 
          <div class="form-group">
          	
            <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" name="login" class="btn btn-primary btn-block"> Login  </button>
          </div> <!-- form-group// -->    
      </form>


      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4">Don't have account? <a href="signup.php">Sign up</a></p>
     <br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top padding-y">
	<div class="container">
		<p class="float-md-right"> 
			&copy Copyright 2019 All rights reserved
		</p>
		<p>
			<a href="#">Terms and conditions</a>
		</p>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->



</body>
</html>



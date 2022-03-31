<?php
// Initialize the session
session_start();
 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="navbar.css">
    



    <style>

/* card css  starts */

body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color:aquamarine;
        background-size: cover;
        background-size: 100% 100%;
        }
   }
   * {
      box-sizing: border-box;
   }
   .card {
      color: white;
      float: left;
      width: calc(23% - 20px);
      padding: 8px;
      
      margin: 10px;
      height: 350px;
   }
   .card p {
      font-size: 15px;
   }
   .cardContainer:after {
      content: "";
      display: table;
      clear: both;
   }
   @media screen and (max-width: 600px) {
      .card {
         width: 93%;
      }
   }
   


</style>
</head>


<body>

    <div id="mySidenav" class="sidenav">
            <div style="padding: 38px;background-color:#2f8dff;"></div>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
          <a href="dbmsproject.php">Home</a><hr>
          <a href="reset-password.php">Reset Password</a><hr>
          <a href="logout.php" >Sign Out</a><hr>
          <a href="contact.php">Contact</a><hr>
    </div>

    <header>
          <button style="font-size:40px;cursor:pointer;color:white;background-color:#2f8dff;border:none;" onclick="openNav()">☰</button>
    </header>
<br>
    <script>
          function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
          }

          function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
          }
      
         function scrolldown(){
            window.scrollTo(0,document.body.scrollHeight);
            }

        </script>

      

   
   <?php
      require_once "config.php";
        $query = " select * from addproduct order by id";
        $run = mysqli_query($link,$query) or die("query error");
        $i=1;
        while($row = mysqli_fetch_array($run))
        {

    ?>

 <div class="cardContainer">
<div class="card" style="background-color: #FFCC00">

<!-- to remove share option from video  -->
    <center><img src="<?php echo $row['image'];?>" width="290" height="180" ></iframe></center>
    

<center><h5 style ="color: black ;"><?php echo $row['names']; ?></h5></center>
<h6 style ="color: black ;">Rs:<?php echo $row['price']; ?></h6>
<br><p style ="color: black ;"><?php echo $row['dess']; ?></p>
<button  style="width:303px;height:38px;background-color:white;color:black;border:none;" onclick="alert()">Buy Now</button>
</div>

  <?php
}
?>


<script>
   function alert(){
      alert("Item Purchased");
   }
</script>



</body>
</html>
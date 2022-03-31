

<!DOCTYPE html>
<html>

  <head>
    <title>Admin login</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/view_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

<br><br><br>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>








    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">

      <a href="view_food_items.php" class="list-group-item">View Product</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Product</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Product</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Product</a>
        <a href="vieworder.php" class="list-group-item active">View Order Items</a>
  
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Your Product List </h3>



          <center>
<div>

<tr>

<th>Name   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<th>Price   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
<!-- <th>dess   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th> -->
<!-- <th>Product Image   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th> -->
<!-- <th>checkbox   &nbsp&nbsp</th> -->
</tr>


</div>
</center>



<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "educretinfo";
$conn =  mysqli_connect($servername, $username,  $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
$fetchQuery="SELECT * from customerorderplaced";
$run=mysqli_query($conn,$fetchQuery);
while($row=mysqli_fetch_array($run))
{
?>

<div class="table"></div>
 <form method="POST" action="">
<!-- <tr>	<td>	<?php echo $row['id']; ?> &nbsp  &nbsp&nbsp</td> </tr> -->
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<tr>	<td>	<?php echo $row['names']; ?> &nbsp  &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="hidden" name="names[]" value="<?php echo $row['names']; ?>"/>
</td> </tr>
<tr>	<td>	<?php echo $row['price']; ?> &nbsp  &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> </tr>
<input type="hidden" name="price[]" value="<?php echo $row['price']; ?>"/>
<!-- <tr>	<td>	<?php echo $row['dess']; ?> &nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td> </tr> -->
<!-- &nbsp&nbsp&nbsp&nbsp<tr>	<td>	<?php echo "<img src='data:image/png;base64,".base64_encode($row['img'])."'width='50px'/> "; ?></td> </tr>&nbsp&nbsp&nbsp&nbsp -->
  <!-- <tr>     <td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="checkbox"  value="<?php echo $row['id']; ?>" name="chv[]" />                          </td>     </tr> -->
<br><br><br>

 <?php
 }
?>

  
  </body>
</html>
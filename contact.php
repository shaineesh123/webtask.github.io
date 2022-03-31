<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="names" placeholder="Your name..">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "educretinfo";
$conn =  mysqli_connect($servername, $username,  $password, $dbname);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  if(isset($_POST['submit']))
  {
    $myname=$_POST['names'];
       $mysub=$_POST['subject'];
      

    $sql = "INSERT INTO contact (names,subject) VALUES ('$myname','$mysub')";
    mysqli_query($conn,$sql) or die("Querry Error");
    // $result = mysqli_query($conn,$sql);
    if(1)
    {
        echo '<script>alert("Details Sent.")</script>';
        echo "<script> window.location.assign('contact.php'); </script>";
    }
   
  }
?>




</body>
</html>

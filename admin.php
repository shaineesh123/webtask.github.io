<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-css.css">
    <title>Document</title>
</head>

<body>
    <div class="main-pge">
        <div class="left">
            <a href="logout.php">
                <div class="admin-logout-0">
                    <h2>Admin Sign-out</h2>
                </div>
            </a>
            <a href="#" onclick="show()">
                <div class="admin-logout-1">
                    <h3>Show Product</h3>
                </div>
            </a>
            <a href="#" onclick="add()">
                <div class="admin-logout-2">
                    <h3>Add Product</h3>
                </div>
            </a>
            <a href="#" onclick="deletes()">
                <div class="admin-logout-3">
                    <h3>Delete Product</h3>
                </div>
            </a>
            <a href="#" onclick="contact()">
                <div class="admin-logout-4">
                    <h3>Contact details</h3>
                </div>
            </a>
        </div>
        <div class="right">
            <br><br>
            <div class="show-prod">
                <?php

                    require_once "config.php";
                ?>



                <table border="2">
                    <tr>
                        <td>Sr.No.</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Description</td>

                        <td>Images</td>
                    </tr>

                    <?php

                        $records = mysqli_query($link,"select * from addproduct"); // fetch data from database

                        while($data = mysqli_fetch_array($records))
                        {
                        ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['names']; ?></td>
                        <td><?php echo $data['price']; ?></td>
                        <td><?php echo $data['dess']; ?></td>
                        <td><img src="<?php echo $data['image']; ?>" width="100" height="100"></td>
                    </tr>
                    <?php
                        }
                    ?>

                </table>

            </div>

            <div class="add-prod">
                <form action="admin.php" method="POST" enctype="multipart/form-data">

                    <br><br>

                    <div class="form-group">

                        <input type="text" class="form-control" id="name" name="names" placeholder="Product name"
                            required="">
                    </div> </br>

                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price (INR)"
                            required="">
                    </div></br>

                    <div class="form-group">
                        <input type="text" class="form-control" id="description" name="dess" placeholder="Description"
                            required="">
                    </div></br>

                    <div class="form-group">
                        <input type="file" class="form-control" accept="application/image" id="images_path" name="image"
                            placeholder="Image" required="">
                    </div></br>

                    <div class="form-group">
                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"
                            value="UPLOAD"> Add Product </button>
                    </div>
                </form>
            </div>

            <div class="deletess">
                <br>
                <table border="2px solid red">
                    <tr>
                        <th style="text-align:center;">Sl. No</th>
                        <th style="text-align:center;">Names</th>
                        <th style="text-align:center;">Price</th>
                        <th style="text-align:center;">Description</th>
                        <th style="text-align:center;">Product Images</th>
                        <th style="text-align:center;">checkbox</th>
                        <th style="text-align:center;">Delete</th>
                    </tr>
                    <?php
                    error_reporting(0);
                    require_once "config.php";
                    $query = " select * from addproduct order by id";
                    $run = mysqli_query($link,$query) or die("query error");

                    while($row = mysqli_fetch_array($run))
                    {

                    ?>
                    <form method="POST" action="">
                        <tr>

                            <td> <?php echo $row['id']; ?> </td>
                            <td> <?php echo $row['names']; ?> </td>
                            <input type="hidden" name="names[]" value="<?php echo $row['names']; ?>" />

                            <td> <?php echo $row['price']; ?></td>
                            <input type="hidden" name="price[]" value="<?php echo $row['price']; ?>" />

                            <td> <?php echo $row['dess']; ?></td>
                            <input type="hidden" name="dess[]" value="<?php echo $row['dess']; ?>" />

                            <td> <img src="<?php echo $row['image']; ?>" width="100" height="100"> </td>
                            <input type="hidden" name="image[]" value="<?php echo $row['image']; ?>" />

                            <td> <input type="checkbox" value="<?php echo $row['id']; ?>" name="id[]" /> </td>
                            <td style="padding:10px;"> <button name="button" type="submit" id="submit"
                                    class="btn btn-warning" value="UPLOAD" > Delete </button> </td>

                        </tr>

                        <?php
                        }
                        ?>

                </table>
<script>
    function again(){
        document.getElementsByClassName('deletess')[0].style.display = 'block';
    }
</script>
                </form>

                <?php
                        require_once "config.php";
                        if(isset($_POST['button']))
                        {

                        $names=$_POST['names'];
                        $names=$_POST['price'];
                        $price=$_POST['dess'];
                        $names=$_POST['image'];
                        $id=$_POST['id'];
                        $key=0;
                        foreach($id as $key=>$val)
                        {
                         $fid= $id[$key];
                         if($fid !="")
                         {
                          $quf="SELECT * from addproduct where id='$fid'";
                          // echo $quf;
                          $ro=mysqli_query($link,$quf);
                          $fro=mysqli_fetch_array($ro);
                        // $sql = "INSERT INTO customerorderplaced (names,price,id) VALUES ('$na','$pr','$fid')";
                        // echo $sql;
                        $sql = "DELETE FROM addproduct WHERE id='$fid'";
                        mysqli_query($link,$sql) or die("Querry Error");
                        if($sql == true){
                            echo "<script>document.getElementsByClassName('deletess')[0].style.display = 'block';</script>";
                        }
                         }
                        }

                        }

                        ?>

            </div>


            <div class="contact">
            <table border="1px"; padding="15px"; style="width:60%;">
            <tr>
                       <th>
                         Names
                       </th>
                       <th>
                       &nbsp&nbsp&nbsp&nbsp&nbsp Subject
                       </th>
                     </tr>
                <?php
                   $fetchQuery="SELECT * from contact";
                   mysqli_query($link,$fetchQuery) or die("Querry Error");
                   $run=mysqli_query($link,$fetchQuery);
                   while($row=mysqli_fetch_array($run))
                   {
                   ?>
                   <center>
                   
                     
                    
                    <tr >
                        <td>	<?php echo $row['names']; ?></td>
                        <td>&nbsp&nbsp&nbsp&nbsp&nbsp	<?php echo $row['subject']; ?></td>&nbsp&nbsp&nbsp&nbsp&nbsp
                   
                    </tr>
                    </center>
                    <?php
                    }
                   ?>
                   
                   </table>
            
                   
                </div>

        </div>
    </div>

    <script>
    function add() {
        document.getElementsByClassName('add-prod')[0].style.display = 'block';
        document.getElementsByClassName('show-prod')[0].style.display = 'none';
        document.getElementsByClassName('deletess')[0].style.display = 'none';
        document.getElementsByClassName('contact')[0].style.display = 'none';
    }

    function show() {
        document.getElementsByClassName('show-prod')[0].style.display = 'block';
        document.getElementsByClassName('add-prod')[0].style.display = 'none';
        document.getElementsByClassName('deletess')[0].style.display = 'none';
        document.getElementsByClassName('contact')[0].style.display = 'none';
    }

    function deletes() {
        document.getElementsByClassName('deletess')[0].style.display = 'block';
        document.getElementsByClassName('add-prod')[0].style.display = 'none';
        document.getElementsByClassName('show-prod')[0].style.display = 'none';
        document.getElementsByClassName('contact')[0].style.display = 'none';
    }

    function contact() {
        document.getElementsByClassName('contact')[0].style.display = 'block';
        document.getElementsByClassName('deletess')[0].style.display = 'none';
        document.getElementsByClassName('add-prod')[0].style.display = 'none';
        document.getElementsByClassName('show-prod')[0].style.display = 'none';
    }
    </script>

</body>


<?php

require_once "config.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($link,"insert into addproduct(names,price,dess,image) values('$_POST[names]','$_POST[price]','$_POST[dess]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
        echo "<script>document.getElementsByClassName('add-prod')[0].style.display = 'block';</script>";
       
        
        
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
   
}

?>

</html>
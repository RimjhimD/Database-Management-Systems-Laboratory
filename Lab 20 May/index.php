<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $roll=$_POST['ROLL'];
    $name=$_POST['NAME'];
    $sql="insert into student' (roll,name)values ('$roll','$name')";

    $result=mysqli_query($con,$sql);

    if($result) {
        echo "Data inserted successfully";
    } else{
        echo "Error: ". $sql. "<br>".mysqli_error($con);
    }
   mysqli_close($con);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Practice</title>
</head>
<body>
    <div class="container my-5"
    <form method="post">
        <div class="mb-3"
        <label>Roll</label>
        <input type="number" class="form-control" placeholder="Enter your Roll number" name="Roll" autocomplete="off">
</div>

<div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="Name" autocomplete="off">
</div>
</form>

    <center>
        <?php
       
        ?>

    </center>
</body>
</html>

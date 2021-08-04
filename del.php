<?php
include("connection.php");
error_reporting(0);
$ID= $_GET['ID'];
$fname=$_GET['fname'];
$sname=$_GET['sname'];
$email=$_GET['email'];
$password=$_GET['password'];
$day=$_GET['day'];
$month=$_GET['month'];
$year=$_GET['year'];
$gender=$_GET['gender'];
$opinion=$_GET['opinion'];
$optional=$_GET['optional'];
$query= "DELETE FROM user  where ID = '$ID'";
$date=mysqli_query($conn,$query);
// if($date){
//     echo  "done";
// }else{
//     echo "failed";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del input</title>
    <style>
.button {
  background-color: #4CAF50;
  border-radius: 10px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
    <h1 style="text-align: center">Deleting value</h1>
    <h3 style="text-align: center; font-size: 30px;font-weight: 100;" >
    ID:  <?php echo $ID  ?>, <br>
    First name :  <?php echo $fname  ?>, <br>
    Surname:  <?php echo $sname  ?>, <br>
    Email:  <?php echo $email  ?>, <br>
    Password:  <?php echo $password  ?>, <br>
    Day:  <?php echo $day  ?>, <br>
    Month:  <?php echo $month  ?>, <br>
    Year:  <?php echo $year  ?>, <br>
    Gender:  <?php echo $gender ?>, <br>
    Opinion:  <?php echo $opinion  ?>, <br>
    Optional:  <?php echo $optional  ?>
     ,<span style="color: red;">    deleted</span> <br>
     <a href="delete.php"><button class="button">Back to Data set</button></a>
      </h3>
   

</body>
</html>
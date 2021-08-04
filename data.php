
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data base</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  font-size: 20px;
}
</style>
</head>
<body>
    <table >
        <tr>
            <th>ID</th>
            <th>F_name</th>
            <th>S_name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Day</th>
            <th>Month</th>
            <th>Year</th>
            <th>Gender</th>
            <th>opinion</th>
            <th>Optional</th>
        </tr>
        <?php

include("connection.php");
$query = "SELECT * FROM sign_up ";
$data= mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


 if($total !=0){
   
    while($result= mysqli_fetch_assoc($data)){
     echo " <tr>
     <td>".$result['ID']."</td>
     <td>".$result['fname']."</td>
     <td>".$result['sname']."</td>
     <td>".$result['email']."</td>
     <td>".$result['password']."</td>
     <td>".$result['day']."</td>
     <td>".$result['month']."</td>
     <td>".$result['year']."</td>
     <td>".$result['gender']."</td>
     <td>".$result['opinion']."</td>
     <td>".$result['optional']."</td>  </tr>";
    }
    
 }
 else{
    echo "table has no record";
 }

?>
    </table> 
</body>
</html>
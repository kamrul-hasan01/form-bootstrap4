
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data </title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  font-size: 20px;
}
.margin{
  /* margin-top: 100px; */

  margin: 100px auto 0 auto;
}
</style>
</head>
<body >
    <table class="margin">
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
            <th colsan ="2">View / Edit</th>
            <th >Delete</th>
        </tr>
        <?php
     

include("connection.php");
$query = "SELECT * FROM user ";
$data= mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total ==0){

  echo "<p style='color:red; text-align: center; font-size: 30px;font-weight: 100;'>" . "table has no record" . "</p>";
}



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
     <td>".$result['optional']."</td> 
     <td> <a href = 'update.php?ID=$result[ID]&fname=$result[fname]&sname=$result[sname]&email=$result[email]&password=$result[password]&day=$result[day]&month=$result[month]&year=$result[year]&gender=$result[gender]&opinion=$result[opinion]&optional=$result[optional] ' > Edit / Update </td>
    
     <td> <a href = 'del.php?ID=$result[ID]&fname=$result[fname]&sname=$result[sname]&email=$result[email]&password=$result[password]&day=$result[day]&month=$result[month]&year=$result[year]&gender=$result[gender]&opinion=$result[opinion]&optional=$result[optional] 'onclick='return checkdelete()'> Delete </td>
     </tr>";
    }
    
 }




?>
    </table> 
</body>
</html>
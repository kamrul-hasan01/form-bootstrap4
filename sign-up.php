<?php

include("connection.php");



if(isset($_POST['create'])){
    
    $fname= $_POST['fname'];
    $sname= $_POST['sname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $day= $_POST['day'];
    $month= $_POST['month'];
    $year= $_POST['year'];
    $gender= $_POST['gender'];
    $opinion= $_POST['opinion'];
    $optional= $_POST['optional'];

    $sql ="INSERT INTO user (fname,sname,email, password,day,month,year,gender,opinion,optional) VALUES ('$fname','$sname','$email','$password','$day','$month','$year','$gender','$opinion','$optional')";
     mysqli_query($conn,$sql);

    // echo  $fname ;echo "<br>";
    // echo $sname;echo "<br>";
    // echo $email;echo "<br>";
    // echo $password;echo "<br>";
    // echo $day;echo "<br>";
    // echo $month;echo "<br>";
    // echo $year;echo "<br>";
    // echo $gender;echo "<br>";
    // echo $opinion;echo "<br>";
    // echo $optional;
    
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
.butt {
  background-color: yellow;
  border-radius: 10px;
  border: none;
  color: black;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body class="container w-75 bg-light my-3 ">

    <div class="container bg-white w-50 my-lg-3">

        <head>
            <div class="d-flex py-2">
                <div>
                    <h1 class="font-weight-bold">Sign Up</h1>
                    <p class="font-weight-light">It's quick and easy. </p>

                </div>
                <div class=" ml-auto ">
              
                    
                    <a href="delete.php"><button class="butt">Back to Data set</button></a>
                </div>
            </div>
        </head>
        <section class=" pb-3">
        <form action ="" method = "POST">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" class="form-control"
                                                                    placeholder="First name" id="name" name="fname" required>
                                                                <p id="n_error" class="text-left"></p>

                                                            </div>
                                                            <div class="col">
                                                                <input type="text" id="sname" name="sname" class="form-control"
                                                                    placeholder="Surname" required>
                                                                <p id="s_error" class="text-left"></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1"></label>
                                                            <input type="text" class="form-control" id="email"
                                                                aria-describedby="emailHelp" name="email"
                                                                placeholder="Enter email address" required>
                                                            <p id="e_error" class="text-left"></p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1"></label>
                                                            <input name="password" type="text" class="form-control" id="password"
                                                                placeholder="New password" required>

                                                            <p id="error" class="text-left"></p>
                                                        </div>





                                                        <div class="text-left">
                                                            <label for="inputCity">Date of Birth</label>

                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">

                                                                    <select id="day" name="day"  class="form-control" required>
                                                                        <option selected value="">Day</option>

                                                                        <option name="day" value="1">1</option>
                                                                        <option name="day" value="2">2</option>
                                                                        <option name="day" value="3">3</option>
                                                                        <option name="day" value="4">4</option>
                                                                        <option name="day" value="5">5</option>
                                                                        <option name="day" value="6">6</option>
                                                                        <option name="day" value="7">7</option>
                                                                        <option name="day" value="8">8</option>
                                                                        <option name="day" value="9">9</option>
                                                                        <option name="day" value="10">10</option>
                                                                        <option name="day" value="11">11</option>
                                                                        <option name="day" value="12">12</option>
                                                                        <option name="day" value="13">13</option>
                                                                        <option name="day" value="14">14</option>
                                                                        <option name="day" value="15">15</option>
                                                                        <option name="day" value="16">16</option>
                                                                        <option name="day" value="17">17</option>
                                                                        <option name="day" value="18">18</option>
                                                                        <option name="day" value="19">19</option>
                                                                        <option name="day" value="20">20</option>
                                                                        <option name="day" value="21">21</option>
                                                                        <option name="day" value="22">22</option>
                                                                        <option name="day" value="23">23</option>
                                                                        <option name="day" value="24">24</option>
                                                                        <option name="day" value="25">25</option>
                                                                        <option name="day" value="26">26</option>
                                                                        <option name="day" value="27">27</option>
                                                                        <option name="day" value="28">28</option>
                                                                        <option name="day" value="29">29</option>
                                                                        <option name="day" value="30">30</option>
                                                                        <option name="day" value="31">31</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">

                                                                    <select id="month" name="month" class="form-control" required>
                                                                        <option selected value="">Month</option>
                                                                        <option name="month" value="1">Jan</option>
                                                                        <option name="month" value="2">Feb</option>
                                                                        <option name="month" value="3">Mar</option>
                                                                        <option name="month" value="4">Apr</option>
                                                                        <option name="month" value="5">May</option>
                                                                        <option name="month" value="6">Jun</option>
                                                                        <option name="month" value="7">Jul</option>
                                                                        <option name="month" value="8">Aug</option>
                                                                        <option name="month" value="9">Sep</option>
                                                                        <option name="month" value="10">Oct</option>
                                                                        <option name="month" value="11">Nov</option>
                                                                        <option name="month" value="12">Dec</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <select id="year" name="year" class="form-control" required>
                                                                        <option selected value="">Year</option>
                                                                        <option name="year" value="2021">2021</option>
                                                                        <option name="year" value="2020">2020</option>
                                                                        <option name="year" value="2019">2019</option>
                                                                        <option name="year" value="2018">2018</option>
                                                                        <option name="year" value="2017">2017</option>
                                                                        <option name="year" value="2016">2016</option>
                                                                        <option name="year" value="2015">2015</option>
                                                                        <option name="year" value="2014">2014</option>
                                                                        <option name="year" value="2013">2013</option>
                                                                        <option name="year" value="2012">2012</option>
                                                                        <option name="year" value="2011">2011</option>
                                                                        <option name="year" value="2010">2010</option>
                                                                        <option name="year" value="2009">2009</option>
                                                                        <option name="year" value="2008">2008</option>
                                                                        <option name="year" value="2007">2007</option>
                                                                        <option name="year" value="2006">2006</option>
                                                                        <option name="year" value="2005">2005</option>
                                                                        <option name="year" value="2004">2004</option>
                                                                        <option name="year" value="2003">2003</option>
                                                                        <option name="year" value="2002">2002</option>
                                                                        <option name="year" value="2001">2001</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <p id="d_error"></p>
                                                        </div>
                                                        <div class="text-left">
                                                            <label name="gender" aria-required="false">Gender</label>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4 ">
                                                                    <div class="border rounded p-2 text-center">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="gender" id="inlineRadio1"
                                                                                value="F" required>
                                                                            <label class="form-check-label"
                                                                                for="inlineRadio1">Female</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <div class="border rounded p-2 text-center">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="gender" id="inlineRadio2"
                                                                                value="M" required>
                                                                            <label class="form-check-label"
                                                                                for="inlineRadio2">Male</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <div class="border rounded p-2 text-center">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="gender" id="inlineRadio3"
                                                                                value="C" required>
                                                                            <label class="form-check-label"
                                                                                for="inlineRadio3">Custom
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>





                                                            </div>

                                                            <div class="form-group">

                                                                <select class="form-control" name="opinion" id=""
                                                                    required>
                                                                    <option class="text-muted" value="">Select your
                                                                        opinion
                                                                    </option>
                                                                    <option value="she">She: "Wish her a happy
                                                                        birthday!"
                                                                    </option>
                                                                    <option value="he">He: "Wish him a happy birthday!"
                                                                    </option>
                                                                    <option value="they">They: "Wish them a happy
                                                                        birthday!"
                                                                    </option>

                                                                </select>
                                                                <label class="form-check-label" for="exampleCheck1">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted text-left">Your
                                                                        pronoun is visible to
                                                                        everyone.</small></label>
                                                            </div>
                                                            <div class="form-group">

                                                                <input type="text" class="form-control"
                                                                    id="formGroupExampleInput2"
                                                                    placeholder="Gender Optional" name="optional">
                                                            </div>
                                                            <div class="form-check">

                                                                <label class="form-check-label" for="exampleCheck1">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted text-left">By
                                                                        clicking Sign up, you agree to our <a
                                                                            href="http://" target="_blank"
                                                                            rel="noopener noreferrer">Terms</a>,<a
                                                                            href="http://" target="_blank"
                                                                            rel="noopener noreferrer"> Data
                                                                            Policy</a> and <a href="http://"
                                                                            target="_blank"
                                                                            rel="noopener noreferrer">Cookie
                                                                            Policy</a> . You may receive SMS
                                                                        notifications
                                                                        from us and can opt out
                                                                        at any
                                                                        time.</small></label>
                                                            </div>

                                                            <div class="text-center my-2"> <button type="submit"
                                                                    class="btn btn-success px-5 font-weight-bold"
                                                                    onclick="validate();" value="Submit" name="create">Sign
                                                                    Up</button></div>
                                                    </form>
        </section>
        
        
    </div>
    <script>
        function validate() {



            var name = String(document.getElementById('name').value);
            var sname = String(document.getElementById('sname').value);
            var email = String(document.getElementById('email').value);
            var password = String(document.getElementById('password').value);

            var day = Number(document.getElementById('day').value);
            var month = Number(document.getElementById('month').value);
            var year = Number(document.getElementById('year').value);
            var error = document.getElementById('error')
            var n_error = document.getElementById('n_error')
            var s_error = document.getElementById('s_error')
            var e_error = document.getElementById('e_error')
            var d_error = document.getElementById('d_error')


            var atposition = email.indexOf("@");
            var dotposition = email.lastIndexOf(".");


            if (name == null || name == "") {
                n_error.innerHTML = 'Insert   your first name'
                n_error.style.color = 'red'
            }
            if (sname == null || sname == "") {
                s_error.innerHTML = 'Insert   your surname'
                s_error.style.color = 'red'
            }
            if (email == null || email == "") {
                e_error.innerHTML = 'Insert   your email'
                e_error.style.color = 'red'
            } else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {

                e_error.innerHTML = ' your email is not valid,insert   a valid email '
                e_error.style.color = 'red'
            }
            else {


            }

            if (password == null || password == "") {
                error.innerHTML = 'Password must not be null.'
                error.style.color = 'red'
            } else if (password.length < 7) {
                error.innerHTML = 'Password must be at least 8 characters long.'
                error.style.color = 'red'
            }

            else {
                error.innerHTML = 'Your pass is strong.'
                error.style.color = 'green'

            }






            if ((month == 4 && day == 31) || (month == 6 && day == 31) || (month == 9 && day == 31) || (month == 11 && day == 31) || (month == 2 && day == 31) || (month == 2 && day == 30)) {

                d_error.innerHTML = 'Invalid Date ,please insert a valid date'
                d_error.style.color = 'red'

            }

            if (month == 2 && day >= 28) {
                if (((year % 4 == 0) && (year % 100 !== 0)) || (year % 400 == 0)) {
                    // d_error.innerHTML = 'Leap year Fab month is 29 days'
                    // d_error.style.color = 'green'
                } else {
                    if (month == 2 && day == 29) {
                        d_error.innerHTML = 'Leap year Fab month is 28 days'
                        d_error.style.color = 'red'
                    }

                }
            }







        }
    </script>

    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js"
                        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                        crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                            crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                            crossorigin="anonymous"></script>
</body>

</html>
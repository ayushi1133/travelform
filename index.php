<?php

if(isset($_POST['name']))
{




$server = "localhost";

$username = "root";

$password = "";



$con = mysqli_connect($server,  $username, $password);




if(!$con)
{
    die("Connection failed".mysqli_connect_error());


}

mysql_select_db('trip', $con) or die(mysql_error());


//echo "Successful connection"'

$name=$_POST['name']; 
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email']; 
$phone=$_POST['phone']; 
//$desc=$_POST['desc'];
$sql = "INSERT INTO trip (name, age, gender, email, phone,dt) 
VALUES ('$name', '$age', '$gender', '$email', '$phone', 100);" ;
echo $sql;


if($con->query($sql)== true)
{
    echo "Successfully inserted";
}
else
{
    echo "error $sql <br> $con->error";
}


$con->close();

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to BRONZE. This is a travel form to US.</h3>

        

        <p>Enter your details to take part in the trip.</p>

        <form action="index.php" method="POST">

            
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">

           <!-- <input type="text" name="desc" id="desc" placeholder="Enter any other text"> -->
            
            
            <br>

          
            <button class="btn">Submit</button>
             <!-- <br>
            <button class="btn">Reset</button> -->



        </form>
    </div>

    

    <!-- comment  --> 

</body>
</html>
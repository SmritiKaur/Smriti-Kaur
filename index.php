<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "collect_data";

$con = mysqli_connect($server, $username, $password, $database);
if(!$con){
    die("connection failed due to". mysqli_connect_error());
}
if(isset($_POST['submit'])){
     $otp = rand(000000,999999);
    # mysqli_query($con, "insert into user_data set OTP = '$otp'");
     $email = $_POST['email'];
    # mysqli_query($con, "update user_data set Email_id = '$email'");
     $sql = "INSERT INTO user_data (Email_id, OTP)
VALUES ('$email', '$otp')";

if ($con->query($sql) === TRUE) {
 
 # echo "New record created successfully";
   header('Location: otp.html');
  # $email = $_POST['email'];
   #echo "<h1>$email</h1>";
     #mysqli_close($con);
}
if(isset($_POST['submitotp'])){
    #$OTP = $_POST['otp'];
    
    #if($OTP == $otp ){
    #$email = $_POST['email'];
    #echo "<h1>$email</h1>";
    echo "you are logged in";

    }

}



?>
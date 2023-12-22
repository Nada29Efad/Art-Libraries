<?php 


$username=$_REQUEST['Username'];
$email=$_REQUEST['Email'];
$password=$_REQUEST{'Password'};

if(isset ($_POST['btne']))
{
  $host="localhost";
  $user="root";
  $password="";
  $db="art_gallary";

  $conn = mysqli_connect($host,$user,$password,$db);
  $insert="insert into usersinfo values('$username','$email','$password')";
  $mysqli_query($conn,$insert);
   
  if($conn){
    echo("<h1 style='color:green;'>Your Registration is done!</h1>");
  }
  else{
    echo("<h1 style='color:Red;'>Your Registration is Failed!</h1>");
  }

}



?>
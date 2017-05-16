<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="localhost";
 $username="root";
 $password="abc";
 $databasename="fullcalendar";
 $con=mysqli_connect($host,$username,$password);
 mysqli_select_db($con,$databasename);

 $email=$_POST['email'];
 $pass=$_POST['password'];

 $select_data=mysqli_query($con,"select * from usuarios where email='$email' and senha='$pass'");
 if($row=mysqli_fetch_array($select_data))
 {
  $_SESSION['email']=$row['email'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>
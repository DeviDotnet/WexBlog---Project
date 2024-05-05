<?php
 $conn=new mysqli('localhost','root','','WexBlog');
 $email="";
 $password="";
  if(isset($_POST['btn']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
    
  }
  $query="INSERT INTO register1 (`email`,`password`) VALUES('$email','$password')";
  $result=$conn->query($query);

 
?>
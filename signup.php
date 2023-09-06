<?php
session_start();


if(isset($_POST["btnsubmit"]))
{
	$name=$_POST["txtname"];
	$username=$_POST["txtusername"];
	$email=$_POST["txtemail"];
	$phone=$_POST["txtphonenumber"];
	$password=$_POST["txtpassword"];
	$confirm=$_POST["txtconfirmpassword"]; 


	// if(empty($email))
	// {
	// 	echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	// }
	// else
	// {
		if($Password==$ConfirmPassword)
		{
          //connection
       $con = mysqli_connect("localhost:3307", "isuru","isuru123@" );

        //select the database 
       mysqli_select_db($con,"greenlands");

     //perform sql
     $sql = "INSERT INTO login (name,username,email,tp,password,confirm) VALUES ('$name','$username','$email','$phone','$password','$confirm')";

     $ret= mysqli_query($con, $sql);
     header('location:home.html');

     //disconnect 
      mysqli_close($con);
		}
		else
		{
			echo '<script>alert("Please Enter correct Password")</script>';
		}
	}



if(isset($_POST["btncomment"]))
{
	$fname=$_POST["txtfname"];
	$lname=$_POST["txtlname"];
	$email=$_POST["txtemail"];
	$phone=$_POST["txtphonenumber"];
	$comment=$_POST["txtcomment"];


	if(empty($comment))
	 {
	 	echo '<script>alert("Comment Filed cannot be blank")</script>';
	 }
	else
	 {
		
          //connection
       $con = mysqli_connect("localhost:3307", "isuru","isuru123@" );

        //select the database 
       mysqli_select_db($con,"greenlands");

     //perform sql
     $sql = "INSERT INTO contact (firstName,lastName,email,tp,comment) VALUES ('$fname','$lname','$email','$phone','$comment')";


     $ret= mysqli_query($con, $sql);
     header('location:home.html');

     //disconnect 
      mysqli_close($con);
		
	}

}


if(isset($_POST["btndilivery"]))
{
	$uname=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	$tp=$_POST["txtphonenumber"];
	$foodid=$_POST["txtfoodid"];
	$address=$_POST["txtaddress"];


	if(empty($uname))
	 {
	 	echo '<script>alert("User Name Filed cannot be blank")</script>';
	 }
	else
	 {
		
          //connection
       $con = mysqli_connect("localhost:3307", "isuru","isuru123@" );

        //select the database 
       mysqli_select_db($con,"greenlands");

     //perform sql
      $sql= "INSERT INTO order(username,contact,foodid,address) VALUES ('$uname','$tp','$foodid','$address')";	


     $ret= mysqli_query($con, $sql);
     header('location:home.html');

     //disconnect 
      mysqli_close($con);
		
	}

}



?>
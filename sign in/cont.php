<?php
session_start();


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



?>
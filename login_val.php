<?php
include_once "includes/connection.php";

if(isset($_POST))
{
	$uname=$_POST['login'];
	$password=$_POST['password'];
 $query="select * from user where (username='$uname' or email='$uname') and password=PASSWORD('$password')";
			//$result=mysqli_query($connection,$query);
                    $result = mysqli_query($connection,$query);
                    if ($user = mysqli_fetch_assoc($result)) {
                    	$id=$user['id'];
                    	$username=$user['username'];
                    	session_start();
                    	
                    	$_SESSION['username']=$username;
                         $msg = "Successfully Logged In";
    
 
echo "<script type='text/javascript'>alert('$msg');
    window.location.href='index.php';

</script>";
}
   else {
                            
                            $msg = "Wrong Credentials Please try again!!";
    
 
echo "<script type='text/javascript'>alert('$msg');
    window.location.href='index.php';
    </script>";

    # code...
                       }                    
                    
                        
                    }




?>
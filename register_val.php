<?php
include_once ("includes/config.php");

$connection = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);

if($connection){
	//  echo "Connection Established Successfully";
}else{
    die(mysqli_connect_error($connection));
}

if(isset($_POST['reg_user']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$error=0;

	 $sql1 = " SELECT * FROM user where username='$username' ";
	 $sql2 = " SELECT * FROM user where email='$email' ";

   	 $result1 = $connection->query($sql1);
   	 $result2 = $connection->query($sql2);
	if($password != $confirm_password)
	{
		$message = "Passwords dont match ";
		echo "<script type='text/javascript'>alert('$message');
		    window.location.href='register.php';

		</script>";
		$error=1;

	}
	if($result1){
          	  if ( $result1->num_rows != 0) {
		$message = "Username already taken ";
		echo "<script type='text/javascript'>alert('$message');
 window.location.href='register.php';
		</script>";
		   
$error=1;
					           }
					       }


  if($result2){
          	  if ( $result2->num_rows != 0) {
$message = "Email already taken ";
		echo "<script type='text/javascript'>alert('$message');
		    window.location.href='register.php';

		</script>";

		$error=1;
					           }
					       }
					       
	
	if($error !=1)
	{
		 $query="INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email',PASSWORD('$password')
)";
			//$result=mysqli_query($connection,$query);
			if ($connection->query($query) === TRUE) {
    //echo "New record created successfully";
    $msg = "Successfully Registered";
    
 
echo "<script type='text/javascript'>alert('$msg');
    window.location.href='index.php';

</script>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}
		


	}
}

?>
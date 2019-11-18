<?php
 $password=$_POST['pass'];
 $email_address=$_POST['email'];
 


$host = "localhost";
$dbUsername="root";
$dbPassword="";
$dbname="betting";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
 if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
 }
else{
	$SELECT = "select email_address from users where email_address = ? AND password = ? ";
	$stmt=$conn->prepare($SELECT);
	$stmt->bind_param("ss",$email_address,$password );
    $stmt->execute();
	$stmt->bind_result($email_address);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
	
if ($rnum==0){
	echo "<script type='text/javascript'>alert(\"please enter correct details or create a new account\")</script>";
    echo "<script> location.href='login.html'; </script>";
    exit;
}
else{
	session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $email_address;
	echo "<script> location.href='fixtures.php'; </script>";
	exit;
}

 $stmt->close();
 $conn->close();
}
 ?>
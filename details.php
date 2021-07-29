<?php

$firstname= $_POST['firstname'];
$email= $_POST['email'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];
$cardname= $_POST['cardname'];
$cardnumber= $_POST['cardnumber'];

if(!empty($firstname)|| !empty($email) || !empty($address)|| !empty($city)|| !empty($state)|| !empty($zip)|| !empty($cardname)|| !empty($cardnumber))
{
	$host = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "";
 	$dbname = "pawfect";
 	$conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);
 	if(mysqli_connect_error()){
 		die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
 	}
 	else
 	{
 		$SELECT = "SELECT cardnumber FROM details WHERE cardnumber = ? Limit 10000 ";
 		$INSERT = "INSERT INTO details(firstname,email,address,city,state,zip,cardname,cardnumber) values(?,?,?,?,?,?,?,?) ";

 		$stmt = $conn->prepare($SELECT);
 		$stmt->bind_param("i",$cardnumber);
 		$stmt->execute();
 		$stmt->bind_result($cardnumber);
 		$stmt->store_result();
 		$rnum = $stmt->num_rows;

 		if ($rnum<100){
 			$stmt->close();
 			$stmt= $conn->prepare($INSERT);
 			$stmt->bind_param("sssssisi",$firstname,$email,$address,$city,$state,$zip,$cardname,$cardnumber);
 			$stmt->execute();
 			function myAlert($msg, $url){
    			echo '<script language="javascript">alert("'.$msg.'");</script>';
    			echo "<script>document.location = '$url'</script>";
			}
			myAlert("Thank you for your Order", "home.php");
 		}
 	}
 	$stmt->close();
 	$conn->close();
}
else
{
 	echo "All fields are required";
 	die();
}

?>
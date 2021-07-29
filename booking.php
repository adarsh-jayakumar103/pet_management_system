<?php 
 
 $name = $_POST['Name'];
 $phone = $_POST['phone'];
 $service = $_POST['service'];

 if(!empty($name)|| !empty($phone) || !empty($service)){
 	$host = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "";
 	$dbname = "pawfect";

 	$conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);
 	if(mysqli_connect_error()){
 		die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
 	}
 	else{
 		$SELECT = "SELECT phone FROM booking WHERE phone = ? Limit 1 ";
 		$INSERT = "INSERT INTO booking(Name,phone,service) values(?,?,?) ";

 		$stmt = $conn->prepare($SELECT);
 		$stmt->bind_param("d",$phone);
 		$stmt->execute();
 		$stmt->bind_result($phone);
 		$stmt->store_result();
 		$rnum = $stmt->num_rows;

 		if ($rnum<100){
 			$stmt->close();
 			$stmt= $conn->prepare($INSERT);
 			$stmt->bind_param("sis",$name,$phone,$service);
 			$stmt->execute();
 			function myAlert($msg, $url){
    			echo '<script language="javascript">alert("'.$msg.'");</script>';
    			echo "<script>document.location = '$url'</script>";
			}
			myAlert("Booking confirmed", "home.html");
 		}
 	}
 	$stmt->close();
 	$conn->close();
 } else{
 	echo "All fields are required";
 	die();
 }
 ?>
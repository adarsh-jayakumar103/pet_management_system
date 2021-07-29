<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="pawfect";

//create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$data = $_POST;

if(mysqli_connect_error())
{
	die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	echo "<pre>";
	var_dump($data);
	$count = count($_POST['item']);
	for ($i=0; $i < $count ; $i++)
	{
		$sql = "INSERT INTO `bill` (`item`, `price`, `quantity`, `t_price`) VALUES ('{$_POST['item'][$i]}', '{$_POST['price'][$i]}', '{$_POST['quantity'][$i]}', '{$_POST['t_price'][$i]}')";
		$conn->query($sql);
		function myAlert($msg, $url)
		{
   			echo '<script language="javascript">alert("'.$msg.'");</script>';
   			echo "<script>document.location = '$url'</script>";
   		}
 		myAlert("Pets Registered");

	}
}
?>


    

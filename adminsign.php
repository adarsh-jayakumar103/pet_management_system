<?php
    
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="pawfect";
    $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    if (isset($_POST["button"])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = mysqli_query($conn,"SELECT * FROM `signin` WHERE `email`='$email' AND `password`='$password' ");
        if($query)
        {
            echo "Login successful";
            header("location:admindashboard.html");
        
        }
        else
       {
            function myAlert($msg, $url){
            echo '<script language="javascript">alert("'.$msg.'");</script>';
            echo "<script>document.location = '$url'</script>";
            }
            myAlert("Login Error", "adminsignin.html");
        }
    }
    
?>
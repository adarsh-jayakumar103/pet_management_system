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
        $query = mysqli_query($conn,"SELECT * FROM `login` where `email`='$email' AND `password`='$password' ");
        if($query)
        {
            echo "Login successful";
            header("location:home.php");
        
        }
        else
        {
            echo "Login error";
        }
    }
    
?>
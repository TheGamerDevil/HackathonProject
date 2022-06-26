<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from login where email='".$uname."' and Password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo '<script language="javascript">';
            echo 'alert("Invalid Username and Password")';
            echo '</script>';
            
        
        }

    }

}
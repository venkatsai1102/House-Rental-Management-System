<?php
session_start();
include("connection.php");
if(isset($_GET['u']))
{
    
    $uname=$_GET['u'];
    $password=$_GET['p'];
    $loginas=$_GET["l"];

    
    if($loginas=="tenant")
    { 
        $sql="select * from tenant where email='".$uname."' AND pwd='".$password."' limit 1";
        
        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==1){
            $query="select * from tenant where email='".$uname."' AND pwd='".$password."' limit 1";
            $res=mysqli_query($conn,$query);
            $data=mysqli_fetch_assoc($res);
            $name=$data['fname'];
            $t_id = $data['t_id'];
            $_SESSION['uname']=$name;
            $_SESSION['ltype']=$loginas;
            $_SESSION['t_id'] = $t_id;
            header('location:home.php');
        }
        else{
            echo "<script type='text/javascript'>alert('You Have Entered Incorrect Details! Login Failed')
            window.location.href='index.html';
            </script>";
        }
    }
    elseif($loginas=="admin")
    { 
        if($uname =="admin" && $password =="admin123")
        {
            $_SESSION['uname']=$uname;
            $_SESSION['ltype']=$loginas;
            header('location:home.php');
        }
    }
    else{
        echo "<script type='text/javascript'>alert('You Have Entered Incorrect Details! Login Failed')
        window.location.href='index.html';
        </script>";
    }
    }
?>
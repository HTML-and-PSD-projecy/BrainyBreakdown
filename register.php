<?php
include 'connect.php';
if(isset($_POST['signup'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $checkEmail="Select *from users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already exists !";
}
else{
    $insertQuery="INSERT into users(username,email,password) VALUES('$username','$email','$password')";
    if($conn->query($insertQuery)==TRUE){
        header("location: loginindex.php");
    }
    else{
        echo "Error:".$conn->error;
    }
}
}
if(isset($_POST['signin'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $password=md5($password);

        $sql="SELECT * FROM users Where username='$username' and password='$password'";
        $result=$conn->query($sql);
        if($result->num_rows> 0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['username']=$row['username'];
            header("Location: DUMMY.php");
            exit();
        }
        else{
            echo "Not Found incorrect username or password";
}  
}
?>
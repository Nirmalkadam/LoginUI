
<?php
require('conn.php'); 
session_start();

if(isset($_POST['username'] ) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;


    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if(empty($username)){
        header("location: logini.php?error=user Name is required");
           exit();
} elseif (empty($password)){
    header("location: logini.php?error=User password is required");
}else{
   $sql = "SELECT * FROM `users` WHERE  username='$username' AND password='$password'";
}   $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result) === 1){
           $row = mysqli_fetch_assoc($result);
       if ($row['username']===$username && $row['password'] === $password);{
        $_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        header("location: home.php");
          echo"Login";
       }

        }
     else{
        header("location: logini.php?error=Incorect User name or password");
        exit();
       }
        

            }
        


        else{
    header("location: logini.php");
    exit();
}





?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1></h1> 
 
</body>
</html>
<?php

include 'connection.php';
    if(isset($_POST['submit']))
{

$user = $_POST['name'];
$gender = $_POST['f1'];
$email = $_POST['email'];
$password =$_POST['password'];
$cpassword =$_POST['confirm_password'];

$pass = password_hash($password,PASSWORD_BCRYPT);
$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

$sql = " select * from users where email = '$email' ";
$query = mysqli_query($con,$sql);

if(!$query){
//  $email_count = mysqli_num_rows($query);

// if($email_count>0)
// {
//     $showError = 'email already exist';
//     header('Location:index.html?emailerror=false');

// }

// else{
    if($password === $cpassword){

        $sql = "INSERT INTO `registration` ( `name`, `f1`, `email`, `password`,  `confirm_password`) VALUES ( '$user','$gender', '$email', '$password', '$cpassword')";

        $query = mysqli_query($con,$sql);
        echo $query;
        
if($query)
{
   $showAlert = true;
   header('Location:index.php?signupsucess=true');
 exit();
}



    }
    else{
      $showError = "password don't match";  
      header('Location:index.php?signuperror=false');
     
    }
// }
}


}
?>
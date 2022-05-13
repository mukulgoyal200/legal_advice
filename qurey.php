<?php
include 'connection.php';
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];
$queryy = $_POST['query'];

$query = "INSERT INTO `query`(`name`, `email`, `query`) VALUES ($name, '$email', '$queryy')";

$query = mysqli_query($con,$sql);
echo $query;

if($query)
{
$showAlert = true;
header('Location:index.php?signupsucess=true');
exit();
}

}
?>

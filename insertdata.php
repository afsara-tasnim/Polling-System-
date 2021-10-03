<?php
$conn= mysqli_connect('localhost', 'root', '', 'polling_system');
//session_start();
// if(isset($_SESSION['email']))
// {
//     $email=$_SESSION['email'];
    $title= $_GET['a'];
    $ans1= $_GET['b'];
    $ans2= $_GET['c'];
    $ans3= $_GET['d'];
    $ans4= $_GET['e'];
    $ans5= $_GET['f'];

    // $sql="SELECT id FROM signup WHERE email='$email'";
    // $result=mysqli_query($db,$sql);
    // while($row=mysqli_fetch_assoc($result))
    // {
    //     $id=$row['id'];
    // }
    $sql="INSERT INTO createpoll(title, ans1, ans2, ans3, ans4,ans5,uid) VALUES  ('$title','$ans1','$ans2','$ans3','$ans4','$ans5','$id')";
    mysqli_query($conn,$sql);

?>
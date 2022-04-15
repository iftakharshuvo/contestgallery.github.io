<?php
include_once 'connection.php';


$Admin_Id= $_POST ['Admin_Id'];
$Name= $_POST ['Name'];
$Gender= $_POST ['Gender'];
$Email= $_POST ['Email'];
$DOB= $_POST ['DOB'];
$Phone_Number= $_POST ['Phone_Number'];
$Marital_Status= $_POST ['Marital_Status'];
$Profession= $_POST ['Profession'];
$Address= $_POST ['Address'];

    $sql= "INSERT INTO admin_info(Admin_Id, Name, Gender, Email, DOB, Phone_Number, Marital_Status, Profession, Address)
    VALUES('$Admin_Id','$Name','$Gender','$Email','$DOB','$Phone_Number','$Marital_Status','$Profession','$Address')";
    mysqli_query($conn, $sql);
    header("Location../Adminsignup.html?signup=success");
<?php
// This file is used to insert data into the database via post from index.html
     $park = $_POST['park'];
     $slider1 = $_POST['slider1'];
     $slider2 = $_POST['slider2'];
     $slider3 = $_POST['slider3'];
     $slider4 = $_POST['slider4'];
     $slider5 = $_POST['slider5'];
     $slider6 = $_POST['slider6'];
     $slider7 = $_POST['slider7'];
     $slider8 = $_POST['slider8'];
     $slider9 = $_POST['slider9'];
     $slider10 = $_POST['slider10'];
     $slider11 = $_POST['slider11'];
     $slider12 = $_POST['slider12'];
     $slider13 = $_POST['slider13'];
     $slider14 = $_POST['slider14'];
     $comments = $_POST['comments'];
     $complaints = $_POST['complaints'];
     $dates = $_POST['date'];
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $phoneNumber = $_POST['phoneNumber'];
     $emailAddress = $_POST['emailAddress'];

$link = mysqli_connect("localhost", "joey", "58645431", "usacedb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO responses (park, slider1, slider2, slider3, slider4, slider5, slider6, slider7, slider8, slider9, slider10, slider11, slider12, slider13, slider14, comments, complaints, dates, firstName, lastName, phoneNumber, emailAddress)
VALUES ('{$park}', '{$slider1}', '{$slider2}', '{$slider3}', '{$slider4}', '{$slider5}', '{$slider6}', '{$slider7}', '{$slider8}', '{$slider9}', '{$slider10}', '{$slider11}', '{$slider12}',
  '{$slider13}', '{$slider14}', '{$comments}', '{$complaints}', '{$dates}', '{$firstName}', '{$lastName}', '{$phoneNumber}', '{$emailAddress}')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
// 301 Moved Permanently
header("Location: https://www.usace.army.mil/", true, 301);
exit();
?>

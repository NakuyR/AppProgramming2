<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'Recip';
$con = new mysqli($host, $user, $pw, $dbName);

$Num = $_GET['Num'];

$query = "select * from Community where Num='$Num'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$Community_Like = $row['Community_Like'];
$Community_Like = $Community_Like+1;

$sql = "UPDATE Community SET Community_Like=$Community_Like WHERE Num='$Num'";
mysqli_query($con, $sql);
    echo '<script>alert("좋아요를 눌렀습니다.")</script>'; 
    echo "<script>location.href='../CommunityRead.php?Num=$Num'</script>";


  mysqli_close($mysqli);

?>
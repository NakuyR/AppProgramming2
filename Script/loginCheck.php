<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'Recip';
$con = new mysqli($host, $user, $pw, $dbName);

$ID = $_POST['ID']; // 아이디
$PW = $_POST['PW']; // 패스워드

$query = "select * from Member where ID='$ID' and PW='$PW'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($ID==$row['ID'] && $PW==$row['PW']){ // id와 pw가 맞다면 login

   $Name=$row['Name'];
   setcookie("Name","$Name",time()+3600,"/");
	echo "<script> location.href = '../Main.php?Name=$Name'; </script>";
}else{ // id 또는 pw가 다르다면 login_fail로 이동

   echo "<script> location.href = '../login_fail.html'; </script>";

}

?>
<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'korea';
		$pw = '1234';
		$dbName = 'Recip';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$Name = $_POST['Name'];
	    $ID = $_POST['ID'];
	    $PW = $_POST['PW'];
		

		$sql = "insert into Member (
				Name,
				ID,
				PW
		)";
		
		$sql = $sql. "values (
				'$Name',
				'$ID',
				'$PW'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("회원가입이 완료되었습니다.")</script>'; 
		}else{ 
		  echo '<script>location.href = "../register_fail.html";</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "../login.html";
</script>

</html>
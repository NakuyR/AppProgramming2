<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'korea';
		$pw = '1234';
		$dbName = 'Recip';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$Community_Title = $_POST['Community_Title'];
	    $Community_Data = $_POST['Community_Data'];
	    $Community_Like = 0;
		

		$sql = "insert into Community (
            Community_Title,
            Community_Data,
            Community_Like
		)";
		
		$sql = $sql. "values (
				'$Community_Title',
				'$Community_Data',
				'$Community_Like'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("글이 작성되었습니다.")</script>'; 
		}else{ 
            echo '<script>alert("글 작성에 실패했습니다.")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "../CommunityList.html";
</script>

</html>
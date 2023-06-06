<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'korea';
		$pw = '1234';
		$dbName = 'Recip';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$Recipe_Title = $_POST['Recipe_Title'];
	    $Recipe_Data = $_POST['Recipe_Data'];
	    $Recipe_Like = 0;
		

		$sql = "insert into Recipe (
            Recipe_Title,
            Recipe_Data,
            Recipe_Like
		)";
		
		$sql = $sql. "values (
				'$Recipe_Title',
				'$Recipe_Data',
				'$Recipe_Like'
		)";

		if($mysqli->query($sql)){ 
		  echo '<script>alert("글이 작성되었습니다.")</script>'; 
		}else{ 
            echo '<script>alert("글 작성에 실패했습니다.")</script>';
		}

		mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "../RecipeList.html";
</script>

</html>
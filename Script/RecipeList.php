<?php
    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'Recip';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
    $i = 0;
    $sql = "SELECT * from Recipe ORDER BY Num DESC limit 8"; 
    $result = mysqli_query($mysqli, $sql);
    $Obj = array();
    $Recipe_Title = array();
    $Recipe_Data = array();
    $Recipe_Like = array();
    $Num = array();

    
    while($row = mysqli_fetch_assoc($result)) { 
       $Recipe_Title[$i] = $row['Recipe_Title'];
       $Recipe_Data[$i] = $row['Recipe_Data'];
       $Recipe_Like[$i] = $row['Recipe_Like'];
       $Num[$i] = $row['Num'];
       $i = $i + 1;
    }

    $n = $i;
    $i = 0;

    while($i < $n){
        $Obj[$i]->Recipe_Title = $Recipe_Title[$i];
        $Obj[$i]->Recipe_Data = $Recipe_Data[$i];
        $Obj[$i]->Recipe_Like = $Recipe_Like[$i];
        $Obj[$i]->Num = $Num[$i];
        $i = $i + 1;
    }

    $JSON = json_encode($Obj);

    echo $JSON;

?>
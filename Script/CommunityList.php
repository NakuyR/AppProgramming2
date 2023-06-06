<?php
    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'Recip';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
    $i = 0;
    $sql = "SELECT * from Community ORDER BY Num DESC limit 8"; 
    $result = mysqli_query($mysqli, $sql);
    $Obj = array();
    $Community_Title = array();
    $Community_Data = array();
    $Community_Like = array();
    $Num = array();

    
    while($row = mysqli_fetch_assoc($result)) { 
       $Community_Title[$i] = $row['Community_Title'];
       $Community_Data[$i] = $row['Community_Data'];
       $Community_Like[$i] = $row['Community_Like'];
       $Num[$i] = $row['Num'];
       $i = $i + 1;
    }

    $n = $i;
    $i = 0;

    while($i < $n){
        $Obj[$i]->Community_Title = $Community_Title[$i];
        $Obj[$i]->Community_Data = $Community_Data[$i];
        $Obj[$i]->Community_Like = $Community_Like[$i];
        $Obj[$i]->Num = $Num[$i];
        $i = $i + 1;
    }

    $JSON = json_encode($Obj);

    echo $JSON;

?>
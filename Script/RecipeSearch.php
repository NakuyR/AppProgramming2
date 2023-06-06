<?php
    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'Recip';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $Recipe_Title = $_GET['Recipe_Title'];
    $sql = "SELECT * from Recipe WHERE Recipe_Title LIKE '%$Recipe_Title%' ORDER BY Num DESC LIMIT 8";
    $result = $mysqli->query($sql);

    $Obj = array();
    $Recipe_Title = array();
    $Recipe_Data = array();
    $Recipe_Like = array();
    $Num = array();

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $Recipe_Title[$i] = $row['Recipe_Title'];
        $Recipe_Data[$i] = $row['Recipe_Data'];
        $Recipe_Like[$i] = $row['Recipe_Like'];
        $Num[$i] = $row['Num'];
        $i++;
    }

    $n = $i;
    $i = 0;

    while ($i < $n) {
        $Obj[$i] = new stdClass();
        $Obj[$i]->Recipe_Title = $Recipe_Title[$i];
        $Obj[$i]->Recipe_Data = $Recipe_Data[$i];
        $Obj[$i]->Recipe_Like = $Recipe_Like[$i];
        $Obj[$i]->Num = $Num[$i];
        $i++;
    }

    $JSON = json_encode($Obj);

    echo $JSON;

    $mysqli->close();
?>

<?php
    $host = 'localhost';
    $user = 'korea';
    $pw = '1234';
    $dbName = 'Recip';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $Community_Title = $_GET['Community_Title'];
    $sql = "SELECT * from Community WHERE Community_Title LIKE '%$Community_Title%' ORDER BY Num DESC LIMIT 8";
    $result = $mysqli->query($sql);

    $Obj = array();
    $Community_Title = array();
    $Community_Data = array();
    $Community_Like = array();
    $Num = array();

    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $Community_Title[$i] = $row['Community_Title'];
        $Community_Data[$i] = $row['Community_Data'];
        $Community_Like[$i] = $row['Community_Like'];
        $Num[$i] = $row['Num'];
        $i++;
    }

    $n = $i;
    $i = 0;

    while ($i < $n) {
        $Obj[$i] = new stdClass();
        $Obj[$i]->Community_Title = $Community_Title[$i];
        $Obj[$i]->Community_Data = $Community_Data[$i];
        $Obj[$i]->Community_Like = $Community_Like[$i];
        $Obj[$i]->Num = $Num[$i];
        $i++;
    }

    $JSON = json_encode($Obj);

    echo $JSON;

    $mysqli->close();
?>

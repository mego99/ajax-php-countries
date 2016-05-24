<?php
$host = "127.0.0.1";
$user ="meg99";
$pass = "";
$db = "countriesdb";
$port = 3306;
$connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());

$q = $_GET["q"];

if (strlen($q)>0) {

    $query = "select * from countries where name like '" . $q . "%';";
    $result = mysqli_query($connection,$query);
    
    $row = mysqli_fetch_assoc($result);
    
    if ($row !== null) {
        $arr = array();
        $arr = $row;
        echo json_encode($arr);
    };
}
?>

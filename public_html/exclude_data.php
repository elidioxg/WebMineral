<?php

$valueName = filter_input(INPUT_POST, 'minerallist');
echo "<h1> Name: $valueName</h1>";
$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$name = Constants::getName();
$connection = mysql_connect($local, $user, $passwd) or print (mysql_error());

mysql_select_db($database, $connection) or print mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
$tableGeneral = Constants::getTableGeneral();
$tablePhysical = Constants::getTablePhysical();
$tableOptical = Constants::getTableOptical();
$sqlSelect1 = "SELECT $name FROM $tableGeneral WHERE $name = '$valuename';";
$result = mysql_query($sqlSelect1, $connection);
if (mysql_num_rows($result) <= 1) {
    $sqlDelete1 = "DELETE FROM $tableGeneral WHERE $name ='$valueName'";
    mysql_query($sqlDelete1, $connection) or print(mysql_error());
    $sqlSelect2 = "SELECT $name FROM $tablePhysical WHERE $name = '$valuename';";
    $result = mysql_query($sqlSelect2, $connection);
    $sqlDelete2 = "DELETE FROM $tablePhysical WHERE $name ='$valueName'";
    mysql_query($sqlDelete2, $connection) or print(mysql_error());
    $sqlSelect3 = "SELECT $name FROM $tableOptical WHERE $name = '$valuename';";
    $result = mysql_query($sqlSelect3, $connection);
    $sqlDelete3 = "DELETE FROM $tableOptical WHERE $name ='$valueName'";
    mysql_query($sqlDelete3, $connection) or print(mysql_error());
    echo"<script language='javascript' type='text/javascript'>alert('$fieldName deleted'); window.location.href='./exclude.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Not possible to delete $fieldName'); window.location.href='./exclude.php'</script>";
}
mysql_close($connection);

<?php
include '../resources/constants.php';
header('Content-Type: text/html; charset=UTF-8');
$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();
$table = Constants::getTableGeneral();
$name = Constants::getName();
$connection = mysql_connect($local, $user, $passwd) or print(mysql_error());
mysql_select_db($database, $connection) or print mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");
$sql = "SELECT $name FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection) or die(mysql_error());
echo "<form method='POST' action='exclude_data.php'>";
echo "<select name='minerallist'>";
while ($results = mysql_fetch_array($result)) {
    echo "<option value='".$results[$name]."'>".$results[$name]."</option>";
}
echo "</select>";
echo "<input type='submit' value='Delete Selected' name='exclude>' >";
echo "</form>";
mysql_close($connection);



<?php

include("../resources/constants.php");

header('Content-Type: text/html; charset=UTF-8');
$user = Constants::getUser();
$local = Constants::getLocal();
$passwd = Constants::getPasswd();
$database = Constants::getDatabase();


$connection = mysql_connect($local, $user, $passwd) or print(mysql_error());

//change for constants of language
$table = Constants::getTableOptical();
$name = Constants::getName();
$sign = Constants::getSign();
$sign_desc = Constants::getSignDesc();
$birr_max = Constants::getBirrMax();
$birr_desc = Constants::getBirrDesc();
$refraction = Constants::getRefraction();
$color_blade = Constants::getColorBlade();
$elongation = Constants::getElongation();
$relief = Constants::getRelief();
$angle2v = Constants::getAngle();
$extinction = Constants::getExtinction();
$interference = Constants::getInterference();

mysql_select_db("mineralogy", $connection) or print mysql_error();

mysql_query("SET NAMES 'utf8'");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_results=utf8");

$sql = "SELECT * FROM $table ORDER BY $name ASC;";
$result = mysql_query($sql, $connection);

$i = 0;
echo "<table border=1>";
echo "  <tr>";
// echo "    <td> Imagem</td>";
echo "    <td>";
echo "Name";
echo "    </td>";
echo "    <td>";
echo "Optic Sign";
echo "    </td>";
echo "    <td>";
echo "Optic Sign Description";
echo "    </td>";
echo "    <td>";
echo "Birrefringence";
echo "    </td>";
echo "    <td>";
echo "Birrefringence Description";
echo "    </td>";
echo "    <td>";
echo "Refraction Index";
echo "    </td>";
echo "    <td>";
echo "Color blade";
echo "    </td>";
echo "    <td>";
echo "Elongation Sign";
echo "    </td>";
echo "    <td>";
echo "Relief";
echo "    </td>";
echo "    <td>";
echo "Angle 2V";
echo "    </td>";
echo "    <td>";
echo "Extinction";
echo "    </td>";
echo "    <td>";
echo "Interference Color";
echo "    </td>";
echo "  </tr>";
while ($results = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "  <td>";
    echo "    <a href='./descr.php?name=$results[$name]'>$results[$name] </a>";
    echo "  </td>";
    //echo "  <td>";
    //if(!empty( $results[$fieldimage])){
    //echo '<img src="data:image/jpeg;base64, '.base64_encode($results[$fieldimage]).'" width="120" height="120" />';
    //}
    //echo "  </td>";
    echo "  <td>";
    echo "    $results[$sign]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$sign_desc]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$birr_max]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$birr_desc]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$refraction]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$color_blade]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$elongation]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$relief]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$angle2v]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$extinction]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$interference]";
    echo "  </td>";
    echo "</tr>";
}
echo "</table>";

mysql_close($connection);

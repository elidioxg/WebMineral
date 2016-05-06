<?php

include_once("../resources/constants.php");
$connection = mysql_connect(local, user, passwd) or print (mysql_error());

mysql_select_db(database, $connection) or print(mysql_error());

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

$name = $_GET[field1];
$table = table;


$sql = "SELECT * FROM $table WHERE nome='$name' ; ";
$result = mysql_query($sql, $conexao);

$results = mysql_fetch_array($result);
echo "<table border=1>";
echo "  <tr>";
echo "    <td>";
echo fieldstr1;
echo "    </td>";
echo "    <td><h3>$results[field1]</h3> </td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr2;
echo "    </td>";
echo "    <td>$results[field2]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr3;
echo "    </td>";
echo "    <td>$results[field3]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr4;
echo "    </td>";
echo "    <td>$results[field4]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr5;
echo "    </td>";
echo "    <td>$results[field5]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr6;
echo "    </td>";
echo "    <td>$results[field6]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr7;
echo "    </td>";
echo "    <td> $results[field7]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr8;
echo "    </td>";
echo "    <td>$results[field8]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr9;
echo "    </td>";
echo "    <td>$results[field9] </td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr10;
echo "    </td>";
echo "    <td>$results[field10]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr11;
echo "    </td>";
echo "    <td>$results[field11]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr12;
echo "    </td>";
echo "    <td>$results[field12]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr13;
echo "    </td>";
echo "    <td>$results[field13]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr14;
echo "    </td>";
echo "    <td> $results[field14]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr15;
echo "    </td>";
echo "    <td> $results[field15]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr16;
echo "    </td>";
echo "    <td> $results[field16] </td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fiesldstr17;
echo "    </td>";
echo "    <td> $results[field17]</td>";
echo "  </tr>";
echo "  <tr>";
echo "    <td>";
echo fieldstr18;
echo "    </td>";
echo "    <td> $results[field18]</td>";
echo "  </tr>";
echo "</table>";

$tableimage = tableimage;
$sql = "SELECT * FROM $tableimage WHERE nome='$name' ; ";
$result = mysql_query($sql, $connection);

echo "<table>";
while ($results = mysql_fetch_array($result)) {
    echo "  <tr>";
    echo '    <td> <img src="data:image/jpeg;base64, ' . base64_encode($results[fieldimage]) . '" width="400" height="400"  /></td>';
    echo "  </tr>";
}
echo "</table>";

mysql_close($connection);
?>


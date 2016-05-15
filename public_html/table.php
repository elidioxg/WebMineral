<?php
  include_once("../resources/constants.php");
   
  header('Content-Type: text/html; charset=UTF-8');
  
  $connection = mysql_connect(localhost, user, passwd) or print(mysql_error());
  mysql_select_db(database, $connection) or print mysql_error();
  echo "test 2";
  mysql_query("SET NAMES 'utf8'");
  mysql_query("SET character_set_connection=utf8");
  mysql_query("SET character_set_client=utf8");
  mysql_query("SET character_set_results=utf8");

  $table = table;
  $field1 = field1;
  
  $sql = "SELECT * FROM $table ORDER BY $field1 ASC;";
  $result = mysql_query($sql, $connection);
  
  $i = 0;
  echo "<table border=1>";
  echo "  <tr>";
  echo "    <td> Imagem</td>";
  echo "    <td>";
  echo fieldstr1;
  echo "    </td>";
  echo "    <td>";
  echo fieldstr2; 
  echo "    </td>";
  echo "    <td>";
  echo fieldstr3;
  echo "    </td>";
  echo "    <td>";
  echo fieldstr4;
  echo "    </td>";
  echo "    <td>";
  echo fieldstr5;
  echo "    </td>";
  echo "    <td>";
  echo fieldstr6;
  echo "    </td>";
  echo "    <td>";
  echo fieldstr7;
  echo "    </td>";
  echo "    <td>";
  echo fieldstr8;
  echo "    </td>";
  echo "  </tr>";
  while($results = mysql_fetch_array($result)){
    echo "<tr>";
    echo "  <td>";
    echo "    <a href='./descr.php?name=$results[$field1]'>$results[$field1] </a>";
    echo "  </td>";
    echo "  <td>";
    //if(!empty( $results[$fieldimage])){
      //echo '<img src="data:image/jpeg;base64, '.base64_encode($results[$fieldimage]).'" width="120" height="120" />';
        //}
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field2]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field3]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field4]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field5]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field6]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field7]";
    echo "  </td>";
    echo "  <td>";
    echo "    $results[$field8]";
    echo "  </td>";
    echo "</tr>";
  }
  echo "</table>";
  
  mysql_close($connection); 
php?>
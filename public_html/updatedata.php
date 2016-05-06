<?php 

  include_once("../resources/constants.php");
  
  $value = filter_input(INPUT_GET, field1, FILTER_REQUIRE_ARRAY);  
  
  $field1 = field1;
  $field2 = field2;
  $field3 = field3;
  $field4 = field4;
  $field5 = field5;
  $field6 = field6;
  $field7 = field7;
  $field8 = field8;
  $fieldimage = fieldimage;
  $table = table;
  
  $connection = mysql_connect(local, user, passwd) or print (mysql_error());
  
  mysql_select_db(database, $conection) or print mysql_error();
  
  mysql_query("SET NAMES 'utf8'");
  mysql_query("SET character_set_connection=utf8");
  mysql_query("SET character_set_client=utf8");
  mysql_query("SET character_set_results=utf8");

  $sql = "SELECT * FROM $table WHERE $field1 = '$value';";
  $result = mysql_query($sql, $connection);
  if($result == null){
      $sql = "UPDATE TABLE $table SET ($field1) VALUES ('$value1');";
      $result = mysql_query($sql) or die("Error");
  } else {
    echo"<script language='javascript' type='text/javascript'>alert('Esta especie ja existe'); window.location.href='add_sp.php'</script>";

  }  

?>
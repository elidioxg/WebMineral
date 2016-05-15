<?php

  include_once("../resources/constants.php");
  $field1 = field1;
  $field2 = field2;
  $field3 = field3;
  $field4 = field4;
  $field5 = field5;
  $field6 = field6;
  $field7 = field7;
  $field8 = field8;    
  
  echo "<html>";
  echo "<head>";
  echo "  <link rel='stylesheet' type='text/css' href='./css/style.css'>";
  echo "  <title> Cadastro de Especie</title>";
  echo "</head>";
  echo "<body>";
  echo "  <form method='POST' action='updatedata.php'>";
  echo "  <label> $field1</label><input type='text' name='field1' id='field1' class='txtin'> <br>";
  echo "  <label> $field2</label><input type='text' name='field2' id='field2' class='txtin'> <br>";
  echo "  <label> $field3</label><input type='text' name='field3' id='field3' class='txtin'> <br>";
  echo "  <label> $field4</label><input type='text' name='field4' id='field4' class='txtin'> <br>";
  echo "  <label> $field5</label><input type='text' name='field5' id='field5' class='txtin'> <br>";
  echo "  <label> $field6</label><input type='text' name='field6' id='field6' class='txtin'> <br>";
  echo "  <label> $field7</label><input type='text' name='field7' id='field7' class='txtin'> <br>";
  echo "  <label> $field8</label><input type='text' name='field8' id='field8' class='txtin'> <br>";
  echo "  <input type='submit' value='Add' id='add' name='add'>";
  echo "  </form>";
  echo "</body>";
  echo "</html>";

?>


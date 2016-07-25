<table >
    <tr>
        <td colspan="5">
            <?php include './header.php'; ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php include './rightpanel.php'; ?>
        </td>
        <td colspan="4"> 
            <?php
            include("../resources/constants.php");
            include("../resources/constants_eng.php");

            header('Content-Type: text/html; charset=UTF-8');
            $user = Constants::getUser();
            $local = Constants::getLocal();
            $passwd = Constants::getPasswd();
            $database = Constants::getDatabase();

            $connection = mysql_connect($local, $user, $passwd) or die(mysql_error());

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

            mysql_select_db($database, $connection) or die(mysql_error());

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
            echo Strings::getName();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getOpticSign();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getOpticSignDesc();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getBirrMax();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getBirr();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getRefraction();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getColorBlade();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getElongation();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getRelief();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getAngle2V();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getExtinction();
            echo "    </td>";
            echo "    <td>";
            echo Strings::getInterference();
            echo "    </td>";
            echo "  </tr>";
            while ($results = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "  <td>";
                echo '<form method="POST" action="modify.php">';
                echo '<input type="submit" value="'.$results[$name].
                        '" name="fieldName" id="bRecord">';
                echo '</form>';
                //echo "    <a href='./descr.php?name=$results[$name]'>$results[$name] </a>";
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
            ?>
        </td>        
    </tr>
</table>

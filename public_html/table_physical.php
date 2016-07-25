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
            include '../resources/constants.php';
            header('Content-Type: text/html; charset=UTF-8');
            $user = Constants::getUser();
            $local = Constants::getLocal();
            $passwd = Constants::getPasswd();
            $database = Constants::getDatabase();
            $table = Constants::getTablePhysical();

            $name = Constants::getName();
            $hard_min = Constants::getHardMin();
            $hard_max = Constants::getHardMax();
            $dens_min = Constants::getDensMin();
            $dens_max = Constants::getDensMax();
            $color = Constants::getColor();
            $streak = Constants::getStreak();
            $brightness = Constants::getBrightness();
            $cleavage = Constants::getCleavage();
            $fracture = Constants::getFracture();
            $magnetism = Constants::getMagnetism();
            $luminescence = Constants::getLuminescence();

            $connection = mysql_connect($local, $user, $passwd) or print(mysql_error());
            mysql_select_db($database, $connection) or print mysql_error();
            mysql_query("SET NAMES 'utf8'");
            mysql_query("SET character_set_connection=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_results=utf8");

            $sql = "SELECT * FROM $table ORDER BY $name ASC;";
            $result = mysql_query($sql, $connection);

            echo "<table border='1'>";
            echo "    <tr>";
            echo "            <td> Name</td> ";
            echo "            <td> Minimum Hardness  </td>";
            echo "            <td> Maximum Hardness </td>";
            echo "            <td> Minimum Density </td>";
            echo "            <td> Maximum Density</td>";
            echo "            <td> Color</td>";
            echo "            <td> Streak</td>";
            echo "            <td> Brightness</td>";
            echo "            <td> Cleavage</td>";
            echo "            <td> Fracture</td>";
            echo "            <td> Magnetism</td>";
            echo "            <td> Luminescence</td>";
            echo "    </tr>";
            while ($results = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "  <td> $results[$name]</td>";
                echo "  <td> $results[$hard_min]</td>";
                echo "  <td> $results[$hard_max]</td>";
                echo "  <td> $results[$dens_min]</td>";
                echo "  <td> $results[$dens_max]</td>";
                echo "  <td> $results[$color]</td>";
                echo "  <td> $results[$streak]</td>";
                echo "  <td> $results[$brightness]</td>";
                echo "  <td> $results[$cleavage]</td>";
                echo "  <td> $results[$fracture]</td>";
                echo "  <td> $results[$magnetism]</td>";
                echo "  <td> $results[$luminescence]</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysql_close($connection);
            ?>
        </td>        
    </tr>
</table>
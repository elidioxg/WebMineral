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
            $table = Constants::getTableGeneral();

            $connection = mysql_connect($local, $user, $passwd) or die(mysql_error());

            $name = Constants::getName();
            $composition = Constants::getComposition();
            $classes = Constants::getClasses();
            $subclasses = Constants::getSubclasses();
            $groups = Constants::getGroups();
            $subgroups = Constants::getSubgroups();
            $occurrence = Constants::getOccurrence();
            $association = Constants::getAssociation();
            $distinction = Constants::getDistinction();
            $applications = Constants::getApplications();

            mysql_select_db("mineralogy", $connection) or die( mysql_error());
            mysql_query("SET NAMES 'utf8'");
            mysql_query("SET character_set_connection=utf8");
            mysql_query("SET character_set_client=utf8");
            mysql_query("SET character_set_results=utf8");
            $sql = "SELECT * FROM $table ORDER BY $name ASC;";
            $result = mysql_query($sql, $connection);

            echo "<table border='1'>";
            echo "    <tr>";
            echo "            <td> Name</td> ";
            echo "            <td> Composition </td>";
            echo "            <td> Class</td>";
            echo "            <td> Subclass</td>";
            echo "            <td> Group</td>";
            echo "            <td> Subgroup</td>";
            echo "            <td> Occurrence</td>";
            echo "            <td> Association</td>";
            echo "            <td> Distinction</td>";
            echo "            <td> Applications</td>";
            echo "    </tr>";
            while ($results = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "  <td> $results[$name]</td>";
                echo "  <td> $results[$composition]</td>";
                echo "  <td> $results[$classes]</td>";
                echo "  <td> $results[$subclasses]</td>";
                echo "  <td> $results[$groups]</td>";
                echo "  <td> $results[$subgroups]</td>";
                echo "  <td> $results[$occurrence]</td>";
                echo "  <td> $results[$association]</td>";
                echo "  <td> $results[$distinction]</td>";
                echo "  <td> $results[$applications]</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysql_close($connection);
            ?>
        </td>        
    </tr>
</table>
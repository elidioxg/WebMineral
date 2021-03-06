<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='./css/sytle.css'>
        <meta name="author" content="elidioxg" >
        <meta name="description" content="Open-Source Softwares for Geosciences">
        <meta name="keywords" 
              content="geology, geoscience, software, open, source, mineral, minerals">
        <title>Modify mineral properties</title>
    </head>
    <body>

        <?php
        include "../resources/constants.php";

        $valueName = filter_input(INPUT_POST, 'fieldName');

        $user = Constants::getUser();
        $local = Constants::getLocal();
        $passwd = Constants::getPasswd();
        $database = Constants::getDatabase();

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

        $tableGeneral = Constants::getTableGeneral();
        $tablePhysical = Constants::getTablePhysical();
        $tableOptical = Constants::getTableOptical();

        $connection = mysql_connect($local, $user, $passwd) or die(mysql_error());

        mysql_select_db($database, $connection) or die(mysql_error());

        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET character_set_connection=utf8");
        mysql_query("SET character_set_client=utf8");
        mysql_query("SET character_set_results=utf8");

        $sql = "SELECT * FROM $tableGeneral WHERE $name = '$valuename';";
        $result = mysql_query($sql, $connection);
        $results = mysql_fetch_array($result);
        if (\mysql_num_rows($result) > 0) {
            echo '<table border="1">';
            echo '<form method="POST" action="insert_data.php">';
            echo '<tr>';
            echo '    <td colspan="4"><label>Name</label>';
            echo "    <input type='text' name='fieldName' id='fieldName' class='txtin' value='" . $results[$name] . "' >";
            echo '    <input type="submit" value="Previous"> ';
            echo '    <input type="submit" value="Next"> ';
            echo '    </td>';
            echo '</tr>';
            echo '<tr>';
            echo '    <td>';
            echo '        <table>';
            echo '            <tr>';
            echo '                <td colspan="2">';
            echo '                    <label id="title">General Properties</label>';
            echo '                </td>';
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Composition<label</td>';
            echo "                <td><input type='text' name='fieldComp' id='fieldComp' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Class</label></td>';
            echo "                <td><input type='text' name='fieldClass' id='fieldClass' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Subclass</label></td>';
            echo "                <td><input type='text' name='fieldSubclass' id='fieldSubclass' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Group</label></td>';
            echo "                <td><input type='text' name='fieldGroup' id='fieldGroup' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Subgroup</label></td>';
            echo "                <td><input type='text' name='fieldSubgroup' id='fieldSubgroup' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Occurrence</label></td>';
            echo "                <td><textarea type='text' name='fieldOccurrence' id='fieldOccurrence' class='txtin'></textarea></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Association</label></td>';
            echo "                <td><textarea  type='text' name='fieldAssociation' id='fieldAssociation' class='txtin'></textarea></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '               <td><label>Distinction</label></td>';
            echo "                <td><textarea  type='text' name='fieldDistinction' id='fieldDistinction' class='txtin'></textarea></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Applications</label></td>';
            echo "                <td><textarea type='text' name='fieldUse' id='fieldUse' class='txtin'></textarea></td>";
            echo '            </tr>';
            echo '        </table>';
            echo '    </td>';
            echo '    <td>';
            echo '        <table>';
            echo '            <tr>';
            echo '                <td colspan="2">';
            echo '                    <label id="title">Physical Properties</label>';
            echo '                </td>';
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Minimum Hardness</label></td>';
            echo "                <td><input type='number' name='fieldHardMin' id='fieldHardMin' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Maximum Hardness</label></td>';
            echo "                <td><input type='number' name='fieldHardMax' id='fieldHardMax' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Minimum Density</label></td>';
            echo "                <td><input type='number' name='fieldDensMin' id='fieldDensMin' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Maximum Density</label></td>';
            echo "                <td><input type='number' name='fieldDensMax' id='fieldDensMax' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Color</label></td>';
            echo "                <td><input type='text' name='fieldColor' id='fieldColor' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Streak</label></td>';
            echo "                <td><input type='text' name='fieldStreak' id='fieldStreak' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Brightness</label></td>';
            echo "                <td><input type='text' name='fieldBrightness' id='fieldBrightness' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Cleavage</label></td>';
            echo "                <td><input type='text' name='fieldCleavage' id='fieldCleavage' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Fracture</label></td>';
            echo "                <td><input type='text' name='fieldFracture' id='fieldFracture' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Magnetism</label></td>';
            echo "                <td><input type='text' name='fieldMagnetism' id='fieldMagnetism' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Luminescence</label></td>';
            echo "                <td><input type='text' name='fieldLuminescence' id='fieldLuminescence' class='txtin'></td>";
            echo '            </tr>';
            echo '        </table>';
            echo '    </td>';
            echo '    <td>';
            echo '        <table>';
            echo '            <tr>';
            echo '                <td colspan="2">';
            echo '                    <label id="title">Optical Properties</label>';
            echo '                </td>';
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Optical Sign</label></td>';
            echo "                <td><input type='text' name='fieldSign' id='fieldSign' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Optical Sign Description</label></td>';
            echo "                <td><textarea type='text' name='fieldSignDesc' id='fieldSignDesc' class='txtin'></textarea></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Birrefringence</label></td>';
            echo "                <td><input type='number' name='fieldBirrMax' id='fieldBirrMax' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Birrefringence Description</label></td>';
            echo "                <td><textarea type='text' name='fieldBirrefringence' id='fieldBirrefringence' class='txtin'></textarea></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Refraction Index</label></td>';
            echo "                <td><input type='text' name='fieldRefraction' id='fieldRefraction' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Color Blade</label></td>';
            echo "                <td><input type='text' name='fieldColorBlade' id='fieldColorBlade' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Elongation Sign</label></td>';
            echo "                <td><input type='text' name='fieldElongation' id='fieldElongation' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Relief</label></td>';
            echo "                <td><input type='text' name='fieldRelief' id='fieldRelief' class='txtin'></td>";
            echo '            </tr>';
            echo '           <tr>';
            echo '                <td><label>Angle 2V</label></td>';
            echo "                <td><input type='text' name='field2VAngle' id='field2VAngle' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Extinction</label></td>';
            echo "                <td><input type='text' name='fieldExtinction' id='fieldExtinction' class='txtin'></td>";
            echo '            </tr>';
            echo '            <tr>';
            echo '                <td><label>Interference Color</label></td>';
            echo "                <td><input type='text' name='fieldInterference' id='fieldInterference' class='txtin'></td>";
            echo '            </tr>';
            echo '        </table>';
            echo '    </td>';
            echo '    <td>';
            echo '        <table>';
            echo '            <tr>';
            echo '                <td colspan="2">';
            echo '                    Chrystallography';
            echo '                </td>';
            echo '            </tr>';
            echo '        </table>';
            echo '   </td>';
            echo '</tr>';
            echo '<tr>';
            echo "    <td colspan='4'><input type='submit' value='Modify' id='add' name='add'>";
            echo '    </td>';
            echo '</tr>';
            echo '</form>';
            echo '</table>';
        } else {
            echo "Error. Contact Admin";
        }
        mysql_close($connection);
        ?>
    </body>
</html>
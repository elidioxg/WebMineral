<?php

include_once("../resources/constants.php");

$valueName = filter_input(INPUT_POST, 'fieldName');
$valueComp = filter_input(INPUT_POST, 'fieldComp');
$valueClass = filter_input(INPUT_POST, 'fieldClass');
$valueSubclass = filter_input(INPUT_POST, 'fieldSubclass');
$valueGroup = filter_input(INPUT_POST, 'fieldGroup');
$valueSubgroup = filter_input(INPUT_POST, 'fieldSubgroup');
$valueOccurrence = filter_input(INPUT_POST, 'fieldOccurrence');
$valueAssociation = filter_input(INPUT_POST, 'fieldAssociation');
$valueDistinction = filter_input(INPUT_POST, 'fieldDistinction');
$valueUse = filter_input(INPUT_POST, 'fieldUse');

$valueHardMin = filter_input(INPUT_POST, 'fieldHardMin');
$valueHardMax = filter_input(INPUT_POST, 'fieldHardMax');
$valueDensMin = filter_input(INPUT_POST, 'fieldDensMin');
$valueDensMax = filter_input(INPUT_POST, 'fieldDensMax');
$valueColor = filter_input(INPUT_POST, 'fieldColor');
$valueStreak = filter_input(INPUT_POST, 'fieldStreak');
$valueBrightness = filter_input(INPUT_POST, 'fieldBrightness');
$valueCleavage = filter_input(INPUT_POST, 'fieldCleavage');
$valueFracture = filter_input(INPUT_POST, 'fieldFracture');
$valueMagnetism = filter_input(INPUT_POST, 'fieldMagnetism');
$valueLuminescence = filter_input(INPUT_POST, 'fieldLuminescence');

$valueSign = filter_input(INPUT_POST, 'fieldSign');
$valueSignDesc = filter_input(INPUT_POST, 'fieldSignDesc');
$valueBirrMax = filter_input(INPUT_POST, 'fieldBirrMax');
$valueBirrefringence = filter_input(INPUT_POST, 'fieldBirrefringence');
$valueRefraction = filter_input(INPUT_POST, 'fieldRefraction');
$valueColorBlade = filter_input(INPUT_POST, 'fieldColorBlade');
$valueElongation = filter_input(INPUT_POST, 'fieldElongation');
$valueRelief = filter_input(INPUT_POST, 'fieldRelief');
$value2VAngle = filter_input(INPUT_POST, 'field2VAngle');
$valueExtinction = filter_input(INPUT_POST, 'fieldExtinction');
$valueInterference = filter_input(INPUT_POST, 'fieldInterference');

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
echo "Species: " . mysql_num_rows($result);
if (\mysql_num_rows($result) <= 1) {
    $sql1 = "INSERT INTO $tableGeneral ($name, $composition, $classes," .
            "$subclasses, $groups, $subgroups, $occurrence, $association," .
            "$distinction, $applications) VALUES ('$valueName', '$valueComp'," .
            "'$valueClass', '$valueSubclass', '$valueGroup', '$valueSubgroup'," .
            "'$valueOccurrence', '$valueAssociation', '$valueDistinction', '$valueApplications')";
    mysql_query($sql1, $connection) or die(mysql_error());

    $sql2 = "INSERT INTO $tablePhysical ($name, $hard_min, $hard_max, $dens_min, $dens_max," .
            "$color, $streak, $brightness, $cleavage, $fracture, $magnetism, $luminescence" .
            ") VALUES ('$valueName', '$valueHardMin', '$valueHardMax', '$valueDensMin'," .
            "'$valueDensMax', '$valueColor', '$valueStreak', '$valueBrightness'," .
            "'$valueCleavage', '$valueFracture', '$valueMagnetism', '$valueLuminescence')";
    mysql_query($sql2, $connection) or die(mysql_error());

    $sql3 = "INSERT INTO $tableOptical ($name, $sign, $sign_desc, $birr_max," .
            "$birr_desc, $refraction, $color_blade, $elongation, $relief, " .
            "$angle2v, $extinction, $interference) VALUES ('$valueName', '$valueSign', " .
            "'$valueSignDesc', '$valueBirrMax', '$valueBirrefringence', '$valueRefraction'," .
            " '$valueColorBlade', '$valueElongation'," .
            "'$valueRelief', '$value2VAngle', '$valueExtinction', '$valueInterference')";
    mysql_query($sql3, $connection) or die(mysql_error());
    echo"<script language='javascript' type='text/javascript'>alert('$fieldName Added'); window.location.href='add.php'</script>";
} else {
    echo"<script language='javascript' type='text/javascript'>alert('Esta especie ja existe'); window.location.href='add.php'</script>";
}
mysql_close($connection);

<?php
die('Not Authorized');
//ENTER THE RELEVANT INFO BELOW
$mysqlDatabaseName ='nabc_drupal';
$mysqlUserName ='nabc_drupal_user';
$mysqlPassword ='Drup@lP@ss';
$mysqlHostName ='localhost';
$mysqlExportPath = $_SERVER['DOCUMENT_ROOT'].'/nabc_drupal.sql';
//echo $mysqlExportPath; die();

//DO NOT EDIT BELOW THIS LINE
//Export the database and output the status to the page
$command='mysqldump --add-drop-table -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > '.$mysqlExportPath;
exec($command);
switch($worked){
case 0:
echo 'Database <b>' .$mysqlDatabaseName .'</b> successfully exported to <b> ' .$mysqlExportPath .'</b>';
break;
case 1:
echo 'There was a warning during the export of <b>' .$mysqlDatabaseName .'</b> to <b> ' .$mysqlExportPath .'</b>';
break;
case 2:
echo 'There was an error during export. Please check your values:<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
break;
}
?>
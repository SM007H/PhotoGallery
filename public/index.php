<?php
require_once( "../includes/database.php");

if( isset($db) ) { echo "true"; } else { echo "false"; }
echo "<br/>";

echo $db->escape_value( "It's working?<br/>");

//$sql = "INSERT INTO users (id, username, password, first_name, last_name) ";
//$sql .= "VALUES (1, 'kskoglund', 'secretpwd', 'Kevin', 'Skoglund')";
//fetch_array$result = $db->query($sql);

$sql = "SELECT * FROM users WHERE id = 1";
$result_set = $database->query( $sql );
$found_user = $database->fetch_array( $result_set );
echo $found_user['username'];
?>
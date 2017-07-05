<?php  
require_once "utilities.php";

$name = $_POST['name'];  
$sex = $_POST['sex'];  
$mobile = $_POST['mobile'];  

$sql = "INSERT INTO `addressBook`.`contacts` (  
`Name` , `Sex` , `Mobile`)  
VALUES (  
'$name', '$sex', '$mobile');";  
require('db_conn.php');

if($result)  
{  
  showmsg("Entry ".$name." added!", "./index.php");
}  
?>  
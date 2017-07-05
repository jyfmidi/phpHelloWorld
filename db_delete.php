<?php
require_once "utilities.php";

$contactId = $_GET["contactId"];
$contactName = $_GET["contactName"];

$sql = "DELETE FROM `addressBook`.`contacts` WHERE `ID`= '$contactId';";

require('db_conn.php');
if($result)  
{  
	showmsg("Entry ".$contactName. " deleted!", "./index.php");
}


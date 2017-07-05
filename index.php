<?php  
	require_once "utilities.php";

	$sql = "SELECT * FROM `contacts`";   
	require('db_conn.php');      
?>  

<table width="100%" border="1">  
    <tr>  
        <th bgcolor="#CCCCCC" scope="col">Name</th>  
        <th bgcolor="#CCCCCC" scope="col">Sex</th>  
        <th bgcolor="#CCCCCC" scope="col">Mobile</th>  
        <th bgcolor="#CCCCCC" scope="col">Operations</th>  
    </tr>

<?php  
while($row = MySQL_fetch_row($result)) 
{  
    if($row[2]==0)  
    {  
        $sex = 'Male';  
    }  
    else  
    {  
        $sex = 'Female';  
    }  
    $deleteRef="db_delete.php?contactId=".$row[0]
    	."&contactName=".$row[1];
    $editRef="edit.php?contactId=".$row[0]
    	."&contactName=".$row[1]
    	."&contactSex=".$row[2]
    	."&contactMobile=".$row[3];
?>  
      <tr>  
        <td><?php echo $row[1];?></td> 
        <td><?php echo $sex;?></td> 
        <td><?php echo $row[3];?></td>  
        <td>
        	[<a href= <?php echo $deleteRef ?>>Delete</a>]
        	[<a href= <?php echo $editRef ?>>Edit</a>]
        </td>
      </tr>  
<?php  
}  
?>  
</table>  
<div align="right">  
    [<a href="add.php" mce_href="add.php">Add new</a>]  
</div>  
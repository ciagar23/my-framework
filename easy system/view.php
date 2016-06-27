<?php

require_once 'database.php';

$query = mysql_query("select * from users order by id asc");
?>
<table border="1">
<tr>
    <td>Name</td>
    <td>Age</td>
    <td>Action</td>
</tr>
<?php

if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['age']?></td>
        <td><a href="index.php?view=update&id=<?=$row['id']?>">[Edit]</a>&nbsp;<a href="process.php?action=delete&id=<?=$row['id']?>">[Delete]</a></td>
    </tr>
<?php        
        
    }
        
}
else{
    
    echo "no record";
}

?>
<tr><td colspan="3"><a href="index.php?view=add" >[Add new record]</a>
</td></tr>
</table>

<html>
<body>
<div style="border:1px solid;"> 
<?php

require_once 'database.php';

$id = $_GET['id'];
$query = mysql_query("select * from users where id='$id'");
$row = mysql_fetch_array($query);


?>
<form action="process.php?action=update" method="post">
<input type='hidden' name="id" value="<?=$id;?>">
Fullname <input type="text" name="name" value="<?=$row['name']?>"><br>
Age <input type="text" name="age" value="<?=$row['age']?>"><br>
<input type="submit" value="Update">
<input type="reset" value="Reset">
</form>    
<a href="index.php" >[Back to home]</a>
</div>
</body>
</html>

<?php

require_once 'database.php';

$action = $_GET['action'];	
	
switch ($action) {
	
	case 'add' :
		add();
		break;
		
	case 'update' :
		update();
		break;
		
	case 'delete' :
		delete();
		break;
    

	default :
}


function add()
{
  $name= $_POST['name'];
	$age = $_POST['age'];

mysql_query("insert users set name='".$name."', age='".$age."'");
echo "<script>alert('Record successfuly saved.');window.location.href='index.php';</script>";
		
				

}

function delete()
{
	$id    = $_GET['id'];

    mysql_query("delete from users where id='".$id."'");
    echo "<script>alert('Record successfuly updated.');window.location.href='index.php';</script>";
		
}

function update()
{

$name= ($_POST['name'])?$_POST['name']:'';
$age= ($_POST['age'])?$_POST['age']:'';
$id    = ($_POST['id'])?$_POST['id']:'';

if($name=="" || $age==""){
    echo "<script>alert('Complete all field');history.back();</script>";
    
}else{
    mysql_query("update users set name='".$name."', age='".$age."' where id='".$id."'");
    echo "<script>alert('Record successfuly updated.');window.location.href='view.php';</script>";
}
		
}



?>
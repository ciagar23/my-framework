<?
$connect = mysql_connect("localhost","root","");
mysql_select_db("easysystem",$connect);

$view = $_GET['view'] ? $_GET['view'] : '';

switch ($view) {

	case 'add' :
		$content 	= 'add.php';		
		break;

	case 'delete' :
		$content 	= 'delete.php';		
		break;

	case 'update' :
		$content 	= 'update.php';		
		break;
		
	default :
		$content 	= 'view.php';	
}

require_once $content;
?>






<?php 
include('../config/dbconfig.php');

if(isset($_POST['surname'])&&($_POST['firstname'])&&($_POST['patronymic'])&&($_POST['date_bithd'])&&($_POST['number'])&&($_POST['city_option'])
	&&($_POST['lang_option'])&&($_POST['newlang']))
{
	$time = strtotime($_POST['date_bithd']);
	 $selectionlist = implode(',',$_POST['lang_option']);
	 $selection = implode(',',$_POST['newlang']);
    var_dump($selectionlist);
	if ($time) {
		$new_date = date('Y-m-d', $time);
	
		$sql = "INSERT INTO workers (surname,firstname,patronymic,birth_date,table_number,city,lang,skills)
		VALUES ('".$_POST["surname"]."','".$_POST["firstname"]."','".$_POST["patronymic"]."','".$new_date."','".$_POST['number']."','".$_POST['city_option']."',
		'".$selectionlist."','".$selection."')";
		$result = mysqli_query($conn,$sql);
	}
}
else {
	echo 'Invalid';
}

header('Location: ../../index.php');

?>


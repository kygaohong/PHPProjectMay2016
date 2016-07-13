<?php

$gift = $_REQUEST['gift'];
$minimum_age = $_REQUEST['minimum_age'];

$dbhost = "localhost";
$dbname = "giftskids";
$dbusername = "root";
$dbpassword = "treehouse";

try
{
	$link = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);
	$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "Unable to connect";
	echo $e ->getMessage();
	exit;
}
if (!checkDuplicate($link, $minimum_age, $gift)) {
	$statement = $link->prepare("INSERT INTO gift(name, minimum_age) VALUES(:name, :minimum_age)");

	$statement->execute(array(
		"name" => $gift,
		"minimum_age" => $minimum_age
	));
}
function checkDuplicate ($link, $minimum_age, $gift){
	$statement = $link->prepare("SELECT name FROM gift WHERE name = :name");
	$statement->bindParam(":name", $gift);
	$statement->execute();
	$duplicates = $statement->fetchAll(PDO::FETCH_ASSOC);
	$duplicates_count = count($duplicates);
	
	if ($duplicates_count > 0) {
		echo 'Your prefered book is already in our database, please put a different book. Thank you!';
	} else {
		echo 'Thank you for your input. ' . $gift .  ' for minimum age of ' . $minimum_age.  ' has been added to our database.';
	}
	return ($duplicates_count > 0);
}

?>


<?php

$dbhost = "localhost";
$dbname = "giftskids";
$dbusername = "root";
$dbpassword = "treehouse";

$link = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);

$statement = $link->prepare("SELECT name, minimum_age FROM gift");

$statement->execute();

$catalog = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<table><tr><td><b>Name</b></td><td>Minimum Age</b></td></tr>";
foreach ($catalog as $item) {
	echo "<tr><td>" . $item['name'] . "</td><td>" . $item['minimum_age'] . "</td></tr>";
}

?>
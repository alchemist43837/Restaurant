<pre>
<?php

// include 'query.php';

$opt     = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$host    = 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
$db_user = 'root';
$db_pass = 'root';



$db= new PDO($host, $db_user, $db_pass, $opt);

$query= $db->prepare('select * from genres');

$query->execute();

var_dump($query);
//
// echo '<ul>';
// 	foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
// 		echo "<li> {$value['name']} </li>" ;
// 	}
//
// 	echo '</ul>';

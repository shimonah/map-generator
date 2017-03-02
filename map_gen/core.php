<?php

$document = $_POST['document'];
$fields = $_POST['fields'];
$fields = explode(",", $fields);
$lengh = count($fields);

echo "<pre>";
for ($i=0;$i<$lengh;$i++){
	echo htmlentities("<ignore>");
	echo "<br>";
	echo "&#9;" . htmlentities("<field>" . $document . "." . $fields[$i] . "</field>");
	echo "<br>";
	echo htmlentities("</ignore>");
	echo "<br>";
}
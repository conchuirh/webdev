<?php
	$db = new SQLite3(students.db);
	$result = $db->query('SELECT * FROM student');
	echo "<p>" . $result . "</p>";
?>
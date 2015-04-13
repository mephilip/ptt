<?php
	$connection = new mysqli("localhost", "root", "root", "audioassemble");
	if ($connection->connect_errno) {
		echo "The connection failed...";
	}
	echo $connection->host_info . "\n";
?>
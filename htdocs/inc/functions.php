<?php
function send404($die = false) {
	header("HTTP/1.0 404 Not Found");
	if ($die) die("404 Not Found");
}
?>

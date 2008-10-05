<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<title><?=$PAGE_TITLE . ($PAGE_TITLE ? ' - ' : '') ;?>JSHManager</title>
		<base href="http://<?=$_SERVER['SERVER_NAME'] . $PHP_SELF_PATH;?>" />
		<link rel="stylesheet" href="css/style.css" type="text/css" />
		<!--script src="script.js" type="text/javascript"></script-->
	</head>
	<body>

	<div id="container">

<?php
require dirname(__FILE__) . '/page_menu.php';
?>

		<div id="content">
			<a id="top"></a>

			<h1><?=$PAGE_TITLE;?></h1>


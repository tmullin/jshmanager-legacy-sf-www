<?php
require_once 'inc/functions.php';

$PAGE = empty($_GET['url']) ? 'home' : $_GET['url'];
$PAGE = trim($PAGE, './');

if ('' == $PAGE)
	$PAGE = 'home';

if (!file_exists("pages/$PAGE.php")) {
	send404();
	$PAGE = '404';
}

$PHP_SELF_PATH = dirname($_SERVER['PHP_SELF']);
if ('/' != $PHP_SELF_PATH) $PHP_SELF_PATH .= '/';
$PHP_SELF_PATH_LEN = strlen($PHP_SELF_PATH);

$PAGE_TITLE = '';

ob_start();
require "pages/$PAGE.php";
$content = ob_get_clean();

require 'menu.php';
require 'inc/page_header.php';
echo $content;
require 'inc/page_footer.php';
?>

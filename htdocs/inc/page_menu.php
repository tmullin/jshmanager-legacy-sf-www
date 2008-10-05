		<div id="menu">
			<div id="logo">
				<a href="./" accesskey="1" title="Go to JSHManager Home"><!--img src="img/logo.png" alt="JSHManager Logo" /--></a></div>

				<ul id="menulist">
					<li style="display: none;"><a href="#top" accesskey="2">Skip Navigation</a></li>
<?php
foreach ($menu as $url => $title) {
	echo "\t\t\t\t\t<li><a href=\"";
	if (empty($url) || -1 === strpos($url, 'http://'))
		echo $PHP_SELF_PATH;
	echo $url . "\"";

	if ((!empty($url) && $PHP_SELF_PATH_LEN === strpos($_SERVER['REQUEST_URI'], $url)) ||
		($_SERVER['REQUEST_URI'] == $PHP_SELF_PATH && $title == 'Home'))
		echo ' id="curmenu"';
	echo '>' . $title . '</a></li>' . "\n";
}
?>
				</ul>
			</div>

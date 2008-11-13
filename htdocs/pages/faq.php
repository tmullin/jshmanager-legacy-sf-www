<?php
$PAGE_TITLE = 'FAQ';

$lines = file(dirname(__FILE__) . '/faq.txt', FILE_IGNORE_NEW_LINES);

if (false === $lines || empty($lines)) {
	echo "<p>This page is currently unavailable. Please try again later.</p>\n";
} else {
	$questions = array();

	$didTitle = false;

	$question = null;

	foreach ($lines as $line) {
		if (0 === strpos($line, '----------')) {
			$questions[] = $question;
			$didTitle = false;
		} else if (!$didTitle) {
			$question = array();
			$question['q'] = trim($line);
			$question['a'] = '';
			$didTitle = true;
		} else {
			$question['a'] .= $line . "\n";
		}
	}


	echo "<ul>\n";
	$i = 1;
	foreach ($questions as $q) {
		echo "\t<li><a href=\"$PAGE#answer" . $i . '">' . $q['q'] . "</a></li>\n";
		$i++;
	}

	echo "</ul>\n\n";

	$i = 1;
	foreach ($questions as $q) {
		echo '<h2><a id="answer' . $i . '">' . htmlspecialchars($q['q']) . "</a></h2>\n";
		echo $q['a'];
		echo "\n";
		$i++;
	}
}

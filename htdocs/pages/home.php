<?php
$PAGE_TITLE = 'Home';
?>
<p>
I started working on this program after I went through my Guitar Hero III set list manually entering scores into 
<a href="http://www.scorehero.com">ScoreHero</a> and thought there must be a better way.
</p>
<p>
The ultimate goals of this project are:
</p>
<ul>
	<li>retrieve song data (titles, note counts, tier names, etc.) from ScoreHero</li>
	<li>manage your Guitar Hero/Rock Band scores locally</li>
	<li>upload the managed scores to ScoreHero</li>
	<li>submit cutoff proofs more easily</li>
	<li>create a signature template system to generate a forum signature based on the managed scores</li>
</ul>
<p>
The project utilizes Java 1.6 and is developed mainly in Eclipse, with the GUI developed in NetBeans.
</p>
<p>
Libraries of interest include:
</p>
<table>
	<tr>
		<td><a href="http://htmlparser.sourceforge.net/">HTML Parser</a></td>
		<td>Used for scraping data from ScoreHero since no XML feeds are available</td>
	</tr><tr>
		<td><a href="http://hc.apache.org/httpclient-3.x/">HttpClient</a></td>
		<td>Used to simulate browsing ScoreHero and submitting forms</td>
	</tr><tr>
		<td><a href="http://commons.apache.org/">Apache Commons</a></td>
		<td>Includes various utility libraries</td>
	</tr><tr>
		<td><a href="http://www.hibernate.org/">Hibernate</a></td>
		<td>Used for ORM</td>
	</tr><tr>
		<td><a href="http://hsqldb.org/">HSQLDB</a></td>
		<td>A pure-Java database used to store song and score data</td>
	</tr><tr>
		<td><a href="http://www.junit.org/">JUnit</a></td>
		<td>A testing framework to help ensure code works as intended</td>
	</tr>
</table>

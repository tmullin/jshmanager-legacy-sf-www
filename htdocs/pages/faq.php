<?php
$PAGE_TITLE = 'FAQ';
?>

<h2>How do I install/upgrade/use JSHManager?</h2>
<p>
Please also refer to Readme.txt, which is included with the distribution.
</p>

<h3>Installing</h3>
<p>
JSHManager is distributed as a zip file as well as a self-extracting
archive for Windows.
</p><p>
Simply extract JSHManager-x.y.z.r.zip/exe to a folder of your choice.
It is recommended to create a folder specifically for JSHManager
(perhaps called "JSHManager") because it will create a sub-folder
called "data" where settings and the database files will be stored.
</p>

<h3>Upgrading</h3>
<p>
If you downloaded a patch jar, ensure you saved it into the directory
where JSHManager.jar is located. Then run the patch jar from that directory.
On Windows, you can generally double-click the jar file to run it. A log
of the patching operation will be located in data/logs/Patcher.txt.
</p><p>
NOTE: Each patch jar only updates the files that have changed from 
the previous version. If you have 0.0.1 and want to upgrade to 0.0.3, for example,
you must download and run both patches for 0.0.2 and 0.0.3 IN ORDER. 
If there is ever a question about whether you've patched correctly, you 
can download the latest full version and upgrade as described below.
</p><p>
If you downlaoded the full version, just unzip the distribution file into
your existing JSHManager directory and overrite any existing files
if prompted.
</p><p>
Your settings and data should not be affected.
</p>

<h3>Using</h3>
<p>
Please refer to Readme.txt.
</p>

<h2>What's new in version x.y.z?</h2>
Please refer to ChangeLog.txt, which is included in the distribution.

<h2>Versioning</h2>
<p>
JSHManager's version is denoted as x.y.z where
</p>
<ul>
	<li>x is the major version number. This will rarely change.</li>
	<li>y is the minor version number. This will generally increment when significant new features are added.</li>
	<li>z is the point version number. This will generally increment when there are bugfixes or possibly if minor features are added.</li>
</ul>
<p>
You can identify which version you are running via Help -&gt; About.
</p><p>
JSHManager is distributed as a file named JSHManager-x.y.z.r.EXT where x.y.z refers to the version as 
described above with r referring to the SVN revision number.
</p>

<h2>How do I report a bug/problem?</h2>
<p>
Please post a reply in one of the JSHManager threads:
</p>
<ul>
	<li><a href="http://www.scorehero.com/forum/viewtopic.php?t=74670">Guitar Hero Thread</a></li>
	<li><a href="http://rockband.scorehero.com/forum/viewtopic.php?t=15464">Rock Band Thread</a></li>
</ul>

<h2>Why does JSHManager require Java?</h2>
<p>
It's quite simple. I am most familiar and comfortable with Java. While I could have written it in C#/.NET, there would be a lot more things I would have to figure out compared to Java. Developing in Java is faster for me since I'm spending time solving problems related to making JSHManager work, not trying to figure out how to do something in C# that I could easily do in Java. An added benefit is that JSHManager should theoretically work on Windows, Linux, and Mac due to Java's cros-platform-ness. Granted I can't test it on every platform.
</p>

<h3>Why Java 1.6?</h3>
<p>
There are some specific new features in Java 1.6 that JSHManager utilizes and trying to support 1.5 and 1.6 simultaneously is a giant pain. If you can't be bothered to install Java 1.6, I can't be bothered to help you. Besides, 1.6 has been out for quite some time now. If it just isn't available for your system then you're SOL.
</p>

<h3>How do I install Java 1.6?</h3>
<p>
Download the Java installer by going to <a href="http://java.sun.com/javase/downloads/index.jsp">http://java.sun.com/javase/downloads/index.jsp,</a>,
scroll down to "Java Runtime Environment (JRE) 6 Update X", click download, select your platform (presumably Windows), and check the box to agree to license. 
Click continue, then click on "jre-6uX-windows-i586-p.exe" to download it. Launch the file you downloaded and follow the wizard.
</p>

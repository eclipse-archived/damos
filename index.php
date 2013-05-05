<?php
/*******************************************************************************
 * Copyright (c) 2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *
 *******************************************************************************/

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());
$localVersion = false;
$pageTitle 		= "Damos";
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/damos/style.css"/>');

// 	# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
<li><a id="buttonDownload" href="downloads.php" title="Download">
	Update-Sites, P2 Repositories & SDK Dropins</a></li>
<li><a id="buttonDocumentation" href="documentation.php" title="Documentation">
	New and Noteworthy, Reference Documentation, Articles, Tutorials, Slides, Examples</a></li>
<li><a id="buttonSupport" href="support.php" title="Support">
	FAQ, Troubleshooring Guide, Community Forum, Report a Bug</a></li>
<li><a id="buttonInvolved" href="getting_involved.php" title="Getting Involved">
	Contribution Guide, Contributors Mailing List, GIT Online Repository, Open Bugs & Enhancements</a></li>
</ul>
</div>

<div id="midcolumn">
<h3>Damos</h3>

<div id="introText">
<p>
This project provides a development environment for analyzing and designing systems using 
a dataflow-oriented approach. Such systems are specified using block diagrams, which 
contain the software components (e.g. control algorithm) of the target device, the mechanical 
components, as well as the physical environment to facilitate close-to-real-world system 
simulation. The mechanical and physical components can be represented as a dynamical system, 
which is specified by providing the transfer function of the corresponding linear 
time-invariant (LTI) system. Even though data flow-oriented design is not bound to a 
specific domain, it is most commonly used in control systems engineering and digital 
signal processing. This project includes all necessary tools such as graphical and textual 
model editors, a simulation environment, and code generators.
</p>

<img class="displayed" width="550" src="images/blockDiagramEditorSmall.png" alt="Damos Snapshot" border="0">

<p></p>

</div>
</div>

<div id="rightcolumn">
<div class="sideitem">
<h6><img src="/projects/images/egg.gif" align="right">Incubation</h6>
<div style="text-align:center"><a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" alt="Incubation" align="middle" border="0"></a></div>
</div>
			
<div>
<h3>Current Status</h3>
<p>Damos is in incubation phase yet and has not passed the parallel IP process. Because this there is even no early release version.
</p>
</div>

<div id="headlines">

<h3>Source code and continuous build</h3>
<p><i>December 01, 2012-</i> We are working on license texts and project setup to become part of the eclipse infrastructure</p>

<div>
<h3>Wiki</h3>
<p>
While the bulk of information about the Damos project can be found here, you may also consider the <a href="http://wiki.eclipse.org/damos">Damos Wiki</a> as a source for further information.
</p>
</div>

<div>
<p><img src="images/itea2.png" border="0"></p>
<p><img src="images/bmbf.jpeg" border="0"></p>
<p>gefördert durch das BMBF, 01IS11020H</p>
</div>

</div>
EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>

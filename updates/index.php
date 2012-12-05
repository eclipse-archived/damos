<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2010
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "Damos Update-Sites";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/damos/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>Using the Eclipse Update Manager (see <a href="http://help.eclipse.org/juno/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-129.htm">Eclipse Help</a> for detailed instructions) Damos can be installed from the following update sites:
<ul>
	<li>Nightly (not promoted to download.eclipse.org): <a href="https://hudson.eclipse.org/hudson/job/damos-master/lastSuccessfulBuild/artifact/update-site/">https://hudson.eclipse.org/hudson/job/damos-master/lastSuccessfulBuild/artifact/update-site/</a></li>
	<li>Releases: Not promoted yet</li>
	<li>Milestones: Not promoted yet</li>
	<li>Integration and Maintenance: Not promoted yet</li>
</ul>
</p>

</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

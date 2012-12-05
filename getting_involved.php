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

	$pageTitle 		= "Damos Getting Involved";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/damos/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>As every Eclipse project, Damos is strongly dependent on active support by its community. 
You may become part of that community and get involved by reporting bugs or enhancement request, 
by contributing patches, by participation in disscussions on the mailing list, or by supporting the maintaining of the Damos wiki.</p>

<h3>Contributor Mailing List</h3>
<p>Technical or organizational discussions (no help wanted questions) around the Damos project take place at the <a href="https://dev.eclipse.org/mailman/listinfo/damos-dev">Damos Developer Mailing List</a>.</p>



</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
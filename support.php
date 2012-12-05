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

	$pageTitle 		= "Damos Support";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/damos/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>Damos support is provided by the community on a volunteer basis. You may use the following means to reach this community.</p>

<h3>Forum & Newsgroup</h3>
<p>Ask questions on the <a href="http://www.eclipse.org/forums/index.php/f/254/">Damos Community Forum</a>
or the <a href="news://news.eclipse.org/eclipse.damos" target="_top">Damos newsgroup</a> (same contents).
</p>

<h3>Bugzilla</h3>
<p>Report defects and ask for enhancements by creating a  
	<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Damos">new bug entry</a> 
	in the <a href="https://bugs.eclipse.org/bugs/">Eclipse Bugzilla</a>. Please survey 
	the list of <a href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Damos&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time" target="_self" >known bugs and demanded enhancements</a> before.
</p>
</div>
EOHTML;

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
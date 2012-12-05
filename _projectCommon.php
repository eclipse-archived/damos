<?php

/*******************************************************************************
 * Copyright (c) 2009-2010 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$Nav->setLinkList(null);

	$PR = "damos";
	$projectName = "Damos";

	$isEMFserver = (preg_match("/^emf(?:\.torolab\.ibm\.com)$/", $_SERVER["SERVER_NAME"]));
	$isBuildServer = (preg_match("/^(emft|modeling|build)\.eclipse\.org$|^localhost$/", $_SERVER["SERVER_NAME"])) || $isEMFserver;
	$isBuildDotEclipseServer = $_SERVER["SERVER_NAME"] == "build.eclipse.org";
	$isWWWserver = (preg_match("/^(?:www.|)eclipse.org$/", $_SERVER["SERVER_NAME"]));
	$isEclipseCluster = (preg_match("/^(?:www.||download.|download1.|build.)eclipse.org$/", $_SERVER["SERVER_NAME"]));
	$debug = (isset ($_GET["debug"]) && preg_match("/^\d+$/", $_GET["debug"]) ? $_GET["debug"] : -1);
	$writableRoot = ($isBuildServer ? $_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/" : "/home/data/httpd/writable/www.eclipse.org/");
	$writableBuildRoot = $isBuildDotEclipseServer ? "/opt/public/cbi" : "/home/www-data";

	$rooturl = "http://" . $_SERVER["HTTP_HOST"] . "/$PR";
	$downurl = ($isBuildServer ? "" : "http://www.eclipse.org");
	$bugurl = "https://bugs.eclipse.org";

	/* projects/components in cvs */
	/* "proj" => "cvsname" */
	/* $cvsprojs = array ("damos" => "org.eclipse.damos"); */

	/* sub-projects/components in cvs for projects/components above (if any) */
	/* "cvsname" => array("shortname" => "cvsname") */
	$cvscoms = array();

if ($isBuildServer)
{
	$projects = array("Damos" => "damos");
	$tmp = array_flip($projects);
	$bugcoms = preg_replace("/ /", "%20", $tmp);
}
else
{
	$defaultProj = "damos";
}
	$extraprojects = array(); //components with only downloads, no info yet, "prettyname" => "directory"
	$nodownloads = array(); //components with only information, no downloads, or no builds available yet, "projectkey"
	$nonewsgroup = array(); //components without newsgroup
	$nomailinglist = array(); //components without mailinglist
	$incubating = array(); // components which are incubating
	$nomenclature = "Project"; //are we dealing with "components" or "projects"?

	include_once $_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/scripts.php";

	$regs = null;
	$proj = "/damos"; // (isset($_GET["project"]) && preg_match("/^(" . join("|", $projects) . ")$/", $_GET["project"], $regs) ? $regs[1] : getProjectFromPath($PR));
	$projct= preg_replace("#^/#", "", $proj);

	$buildtypes = array(
		"R" => "Release",
		"S" => "Stable",
		"I" => "Integration",
		"M" => "Maintenance",
		"N" => "Nightly"
	);
	
	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	# $Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("Damos", "/damos", "_self", 3);
   	
	$Nav->addNavSeparator("Download", "/damos/downloads.php", "_self", 3);
   	$Nav->addCustomNav("Update-Sites", "/damos/updates/index.php", "_self", 3);
   	$Nav->addCustomNav("P2 Repositories & SDK Dropins", "/damos/downloads/index.php", "_self", 3);
	
	
	$Nav->addNavSeparator("Getting Involved", "/damos/getting_involved.php", "_self", 3);
	$Nav->addCustomNav("Contributors Mailing List", "http://dev.eclipse.org/mailman/listinfo/damos-dev", "_self", 3);
	$Nav->addCustomNav("Open Bugs & Enhancements", "https://bugs.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=Damos&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time", "_self", 3);
	
	$Nav->addNavSeparator("About", "http://www.eclipse.org/projects/project_summary.php?projectid=tools.damos", "_self", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "eclipse, damos";
	$pageAuthor		= "Benjamin Schwertfeger";

	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Eclipse", "/", "_self");
	$Menu->addMenuItem("Damos", "/damos", "_self");
	$Menu->addMenuItem("Download", "/damos/downloads.php", "_self");
	$Menu->addMenuItem("Documentation", "/damos/documentation.php", "_self");
	$Menu->addMenuItem("Support", "/damos/support.php", "_self");
	$Menu->addMenuItem("Getting Involved", "/damos/getting_involved.php", "_self");
    $Menu->addMenuItem("About", "http://www.eclipse.org/projects/project_summary.php?projectid=tools.damos", "_self");
	
	# To define additional CSS or other pre-body headers
	#$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/damos/style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
#	$App->SetGoogleAnalyticsTrackingCode("UA-2566337-9");
?>

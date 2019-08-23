<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-Smart</title>
<link rel="stylesheet" href="jquery.mobile-1.4.2.min.css" type="text/css" />
<link rel="stylesheet" href="jquery.mobile.theme-1.4.2.min.css" />
<script src="jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.4.2.min.js" type="text/javascript"></script>
<script src="jquery.mobile.theme-1.4.2.min.css" type="text/css"></script>
</head>
<body>
<!-- This is the First Page -->
<section id="firstpage" data-role="page" data-fullscreen="true" data-theme="a">
<header data-role="header" data-position="fixed" data-theme="b">
<h1 style="color:#09F">e-Smart - CRIRRF</h1>
<a href="index.html" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
</header>
<div data-role="content" align="left">
<form id="formIdCrrirrf">
<div data-role="fieldcontain" class="ui-hide-label">
	<label for="username">Facility Name</label>
	<input type="text" name="facname" id="facname" value="" placeholder="Facility Name"/>
</div>
</form>
</div>
<?php
/******* BEGIN LICENSE BLOCK *****
* BilboPlanet - Un agrégateur de Flux RSS Open Source en PHP.
* BilboPlanet - An Open Source RSS feed aggregator written in PHP
* Copyright (C) 2009 By French Dev Team : Dev BilboPlanet
* Contact : dev@bilboplanet.org
* Website : www.bilboplanet.org
* Tracker : redmine.bilboplanet.org
* Blog : blog.bilboplanet.org
* 
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as
* published by the Free Software Foundation, either version 3 of the
* License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
***** END LICENSE BLOCK *****/
?>
<?php
# Inclusion des fonctions
require_once(dirname(__FILE__).'/../inc/i18n.php');
require_once(dirname(__FILE__).'/../inc/fonctions.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<?php
if (isset($_GET) && isset($_GET['reload'])){
	echo '<META HTTP-EQUIV="Refresh" CONTENT="300">';
}
?>
	<link rel="shortcut icon" type="image/png" href="./newstyle/icons/fire.png" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="ROBOTS" content="noindex, nofollow, noarchive" />

<title><?=T_('Administration');?> - <?php echo $planet_title ?></title>

	<link rel="stylesheet" type="text/css" href="newstyle/styles.css" media="all" />
	<script type="text/javascript" src="newstyle/js/mootools-1.2.1-core.js"></script>
	<script type="text/javascript" src="newstyle/js/mootools-1.2-more.js"></script>
	<script type="text/javascript" src="newstyle/js/sorttable.js"></script>
	<script type="text/javascript" src="newstyle/js/bilboplanet-0.1-core.js"></script>
	<script type="text/javascript" src="newstyle/js/ed.js"></script>
	<script type="text/javascript">
	var _Admin;
	window.addEvent('domready', function(){
		// Lance le'admin
		BP_Admin = new BP_Administrator();

		$('BP_Logout').addEvent('click', function(event){
			event.stop();
			$confirm('Se d&eacute;connecter de l\'administration ?', '<span class="logout"><?=T_('Logout');?></span>');
		});

		$('BP_About').addEvent('click', function(event){
			event.stop();
			$alert('BilboPlanet - Essais d\'administration', '<span class="<?=T_('About BilboPlanet');?></span>');
		});
	});
	</script>
</head>

<body class="admin">

<div id="BP_head" class="toolbar bgbox bdbox"><div class="grad bdinbox">
	<p class="site_info" style="padding-left:20px;background-image: url('newstyle/icons/arrow.png');" >
		<span class="ctitle"><a class="tips" title="<?php echo $planet_title; ?>" rel="Retour sur le Planet" href="../" target="_blank">Retour sur le Planet</a></span>
	</p>
	<ul id="BP_userbar">
		<li><a id="BP_Logout" href="#" class="button minbutton br3px"><?=T_('Logout');?></a></li>
		<li><a id="BP_About" class="button minbutton br3px">?</a></li>
	</ul>
	<hr class="clear" />
</div></div>


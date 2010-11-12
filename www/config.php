<?php
/*
 * Copyright (C) 2010 Urban Suppiger, Pirmin Mattmann
 *
 * This file is part of eCamp.
 *
 * eCamp is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * eCamp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with eCamp.  If not, see <http://www.gnu.org/licenses/>.
 */

	
	
	$GLOBALS[base_uri]				= "http://ecamp.pfadiluzern.ch/";
	
	$GLOBALS[lib_dir] 				= "./lib";
	$GLOBALS[module_dir] 			= "./module";
	$GLOBALS[app_dir] 				= "./application";
	
	$GLOBALS[public_app_dir]		= "./public/application";
	$GLOBALS[public_global_dir]		= "./public/global";
	$GLOBALS[public_module_dir]		= "./public/module";
	
	$GLOBALS[template_app_dir] 		= "./template/application";
	$GLOBALS[template_global_dir] 	= "./template/global";
	$GLOBALS[template_module_dir] 	= "./template/module";
	
	$GLOBALS[tpl_dir] = "../../../template";

	$GLOBALS[pear_dir] = "/home/pfadiluz/www/pear/PEAR/";
	ini_set("include_path", ".:/usr/local/lib/php:/home/pfadiluz/www/pear/PEAR/");
	
	$GLOBALS[captcha_pub] = "";
	$GLOBALS[captcha_prv] = "";
	
	
	$GLOBALS[time_shift] = 300; // Minuten;
	$GLOBALS[news_num] = 5;

	// Layout wählen
	$GLOBALS[skin] = "skin3";
	
	$GLOBALS[debug] = 0;
	$GLOBALS[register] = 0;
	
	// Seite mit HTML-Tidy parsen
	$GLOBALS[parse_tidy] = false;
	
	$GLOBALS[feedback_mail] = "ecamp@pfadiluzern.ch";
	$GLOBALS[support_mail]  = "ecamp@pfadiluzern.ch";	
	
	if( $_SERVER['HTTP_HOST'] == "localhost" )
	{
		$GLOBALS[host]	= "localhost";
		$GLOBALS[db]	= "ecamp";
		$GLOBALS[us] 	= "root";
		$GLOBALS[pw] 	= "root";
	}
	
	
	$GLOBALS[en_to_de] = array(
		"Monday" 	=> "Montag",
		"Tuesday"	=> "Dienstag",
		"Wednesday"	=> "Mittwoch",
		"Thursday"	=> "Donnerstag",
		"Friday"	=> "Freitag",
		"Saturday"	=> "Samstag",
		"Sunday"	=> "Sonntag",
		
		"Mon"		=> "Mo",
		"Tue"		=> "Di",
		"Wed"		=> "Mi",
		"Thu"		=> "Do",
		"Fri"		=> "Fr",
		"Sat"		=> "Sa",
		"Sun"		=> "So",
		
		"January"	=> "Januar",
		"February"	=> "Februar",
		"March"		=> "März",
		"April"		=> "April",
		"May"		=> "Mai",
		"June"		=> "Juni",
		"July"		=> "Juli",
		"August"	=> "August",
		"September"	=> "September",
		"November"	=> "November",
		"December"	=> "Dezember"
	);
	
		
?>

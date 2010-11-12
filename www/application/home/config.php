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


# Sichheitslevel der einzelnen Aktionen/Dateien
# --> Kommandos/Files die nicht aufgeührt sind, können nicht aufgerufen werden
$security_level = array( 'home' => 10,
                         'feedback' => 10,
						 'help' =>10,
						 "take_feedback" => 10,
						 "action_change_skin" => 100,
						 "action_del_news" => 10
						 
						 );

$css = array(
				"home.css" => "app"
				
			);

$js  = array(
				"mootools1.2.js"	=> "global"
				//"jsos.js"			=> "global",
				//"event.js" 			=> "module",
				//"postit.js"         => "module"
				//"home.js" => "app"
				
			);

# Standardkommando
if( $_page->cmd == "" ) {	$_page->cmd = "home";	}


?>
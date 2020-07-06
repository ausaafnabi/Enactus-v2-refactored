<?php
/*
 * Config.php
 * 
 * Copyright 2020 Ausaaf Nabi <ausaaf@ausaaf-desktop>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
	ini_set("display_errors", true);
	date_default_timezone_set("Asia/Calcutta");	
	define("DB_DSN","mysql:host=localhost;dbname=enactusAryabhatta");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD","A");
	define("CLASS_PATH","classes");
	define("TEMPLATE_PATH","templates");
	define("HOMEPAGE_NUM_ARTICLES",5);
	define("ADMIN_USERNAME","admin");
	define("ADMIN_PASSWORD","password");
	require(CLASS_PATH."/Article.php");
	require(CLASS_PATH."/Media.php");
	
	function handleException($exception){
		echo "a Problem Occurred. Please Try later!";
		error_log($exception->getMessage());
		
	}
	
	set_exception_handler('handleException');
?>

<?
/*
 * Author: vinicius@opentech.inf.br
 *
 * (C) 2005 by Vinicius M. de Souza <vinicius@opentech.inf.br>
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
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 */
 
// disable notices
error_reporting(E_ALL ^ E_NOTICE);

include "config.php";
include "languages/$language.inc.php";
include "include/grab_globals.inc.php";
$lang["version"] = "0.4";
$page=substr($PHP_SELF,strlen($PHP_SELF)-10,10);
if ($page!="/index.php")
	include "include/header.inc.php";
?>

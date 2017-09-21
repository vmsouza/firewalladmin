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
 
function ShowForm($iptfile,$lang) {
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["rsheader"])."</b></td></tr>";
	$lang["rsquestion"]=str_replace("%s",$iptfile,$lang["rsquestion"]);
	echo "<tr><td colspan=2>".$lang["rsquestion"]."</td><tr>";
	echo "<tr><td colspan=2><input type=submit name=submit value=\"".$lang["yes"]."\"> "
	    ."<input type=hidden name=op value=restore>"
	    ."</table>"
	    ."</form>";
}

function RestoreFirewall($iptrestore,$iptfile,$lang) {
	$lang["rsok"]=str_replace("%s",$iptfile,$lang["rsok"]);
	echo "<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td icolspan=2><b>".strtoupper($lang["rsheader"])."</b></td></tr>"
	    ."<tr><td colspan=2>".$lang["rsok"]."</td></tr>";
	echo "</table>";
	$cmd="$iptrestore < $iptfile";
	exec("sudo $cmd");
}
?>


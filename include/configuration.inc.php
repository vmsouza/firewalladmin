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
 
function ConfigForm($ipt,$iptsave,$iptrestore,$iptfile,$flang,$fcounters,$lang) {
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["configuration"])."</b></td></tr>"
	    ."<tr><td>".$lang["ipt"].":</td><td><input type=text name=fipt size=50 maxlength=50 value=$ipt class=inputtext></td></tr>"
	    ."<tr><td>".$lang["iptsave"].":</td><td><input type=text name=fiptsave size=50 maxlength=50 value=$iptsave class=inputtext></td></tr>"
	    ."<tr><td>".$lang["iptrestore"].":</td><td><input type=text name=fiptrestore size=50 maxlength=50 value=$iptrestore class=inputtext></td></tr>"
	    ."<tr><td>".$lang["iptfile"].":</td><td><input type=text name=fiptfile size=50 maxlength=50 value=$iptfile class=inputtext></td></tr>";
	echo "<tr><td>".$lang["language"].":</td><td><select name=flang class=inputtext>";
	include "languages/lang.defs.php";
	foreach ($langdef as $langdesc => $langfile)
		if ($langfile==$flang)
			echo "<option value=$langfile selected>$langdesc";
		else
			echo "<option value=$langfile>$langdesc";
	echo "</select></td></tr>";
	echo "<tr><td>".$lang["showcounters"].":</td><td><select name=fcounters class=inputtext>";
	if ($fcounters=="yes") {
		echo "<option selected value=yes>".$lang["yes"];
		echo "<option value=no>".$lang["no"];
	} else {
		echo "<option value=yes>".$lang["yes"];
		echo "<option selected value=no>".$lang["no"];
	}
	echo "</select></td></tr>";
	echo "<tr><td colspan=2>".$lang["configconfirm"]."</td></tr>"
	    ."<tr><td colspan=2><input type=submit name=submit value=\"".$lang["save"]."\"> "
	    ."<input type=hidden name=op value=save>"
	    ."</table>"
	    ."</form>";
}

function ConfigSave($fipt,$fiptsave,$fiptrestore,$fiptfile,$flang,$fcounters,$lang) {
	echo "<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["configuration"])."</b></td></tr>"
	    ."<tr><td colspan=2>".$lang["configsaved"]."</td></tr>";
	$fp=fopen("./config.php","w+");
	$filecontent="<?\n"
		    ."\$"."ipt=\"$fipt\";\n"
		    ."\$"."iptsave=\"$fiptsave\";\n"
		    ."\$"."iptrestore=\"$fiptrestore\";\n"
		    ."\$"."iptfile=\"$fiptfile\";\n"
		    ."\$"."language=\"$flang\";\n"
		    ."\$"."counters=\"$fcounters\";\n"
		    ."?>\n";
	fputs($fp,$filecontent);
	fclose($fp);
	echo "</table>";
}
?>


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
 
function ShowPolicyForm($table,$chain,$policy,$lang) {
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["chpolicyheader"])."<big></b></td></tr>"
	    ."<tr><td>".$lang["table"].":</td><td>$table</td></tr>"
	    ."<tr><td>".$lang["chain"].":</td><td>$chain</td></tr>"
	    ."<tr><td width=30%>".$lang["actualpolicy"].":</td><td width=70%>".$lang["$policy"]."</td></tr>"
	    ."<tr><td width=30%>".$lang["newpolicy"].":</td><td width=70%><select name=newpolicy class=inputtext>";
	$policies="ACCEPT DROP";
	$policies=split(" ",$policies);
	foreach($policies as $id => $desc) {
		if ($policy==$desc)
			echo "<option selected value=$desc>".$lang["$desc"];
		else
			echo "<option value=$desc>".$lang["$desc"];
	}
	    echo "</select></td></tr>"
	        ."<tr><td colspan=2><input type=submit name=submit value=\"".$lang["change"]."\"></td></tr>"
		."<input type=hidden name=op value=change>"
	        ."</table>"
	        ."</form>";
}

function ChangePolicy($table,$chain,$newpolicy,$lang,$iptables) {
	$cmd="$iptables -t $table -P $chain $newpolicy";
	exec("sudo ".$cmd,$output,$return);
	echo "<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["chpolicyheader"])."</b></td></tr>";
	if ($return==0)
		echo "<tr><td colspan=2>".$lang["success"]."</td></tr>";
	else
		echo "<tr><td colspan=2>".$lang["success"]."</td></tr>";
	echo "<tr><td colspan=2>".$lang["command"].":</td></tr><tr><td><b><code>$cmd</code></b></td></tr>"
	    ."<form><tr><td colspan=2 align=center><input type=button name=button value=\"".$lang["close"]."\" onclick=\"window.close()\"></td></tr></form>"
	    ."</table>";
	echo "<body onload=\"javscript:ListRules();\">";
}
?>


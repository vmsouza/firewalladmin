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
 
function FlushForm($table,$chain,$policy,$lang) {
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["flushheader"])."</b></td></tr>"
	    ."<tr><td width=10%>".$lang["table"].":</td><td>$table</td></tr>"
	    ."<tr><td>".$lang["chain"].":</td><td>$chain</td></tr>";
	if ($chain=="INPUT" or $chain=="FORWARD" or $chain=="OUTPUT" or $chain=="PREROUTING" or $chain=="POSTROUTING")
		echo "<tr><td width=10%>".$lang["actualpolicy"].":</td><td width=90%>".$lang["$policy"]."</td></tr>";
	if ($policy=="DROP")
		echo "<tr valign=top><td><font color=red><b>".$lang["warning"].":</b></font></td><td><font color=red>".$lang["flushwarning"]."</font></td></tr>";
	echo "<tr><td colspan=2>".$lang["flushconfirm"]."</td></tr>"
	    ."<tr><td colspan=2><input type=submit name=submit value=\"".$lang["yes"]."\"> "
	    ."<input type=button name=button value=\"".$lang["no"]."\" onclick=\"javascript:window.close();\"></td></tr>"
	    ."<input type=hidden name=table value=$table>"
	    ."<input type=hidden name=chain value=$chain>"
	    ."<input type=hidden name=policy value=$policy>"
	    ."<input type=hidden name=op value=flush>"
	    ."</table>"
	    ."</form>";
}

function FlushChain($table,$chain,$policy,$lang,$iptables) {
	if ($policy=="DROP") {
		$cmd1="$iptables -t $table -P $chain ACCEPT";
		exec("sudo ".$cmd1,$output,$return);
	}
	$cmd2="$iptables -t $table -F $chain";
	exec("sudo ".$cmd2,$output,$return);
	echo "<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["flushheader"])."</b></td></tr>";
	if ($return==0)
		echo "<tr><td colspan=2>".$lang["success"]."</td></tr>";
	else
		echo "<tr><td colspan=2>".$lang["success"]."</td></tr>";
	if ($policy=="DROP")
		echo "<tr><td colspan=2>".$lang["commands"].":</td></tr><tr><td><b><code>$cmd1<br>$cmd2</code></b></td></tr>";
	else
		echo "<tr><td colspan=2>".$lang["command"].":</td></tr><tr><td><b><code>$cmd2</code></b></td></tr>";
	echo "<body onload=\"ListRules()\">";
	echo "<form><tr><td colspan=2 align=center><input type=button name=button value=\"".$lang["close"]."\" onclick=\"window.close()\"></td></tr></form>"
	    ."</table>";
}
?>


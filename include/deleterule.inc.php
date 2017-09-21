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
 
function ShowDeleteRuleForm($table,$chain,$ruleid,$id,$lang,$iptables,$iptsave){
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["delruleheader"])."</b></td></tr>"
	    ."<tr><td>".$lang["table"].":</td><td>$table</td></tr>"
	    ."<tr><td>".$lang["chain"].":</td><td>$chain</td></tr>"
	    ."<tr><td width=30%>".$lang["ruleid"].":</td><td width=70%>".($id+1)."</td></tr>"
	    ."<tr><td colspan=2>".$lang["ruledetails"].":</td></tr>";
	$rule=split(" ",getrule($table,$chain,$ruleid,$iptsave));
	$ruledetails="";
	for ($i=1; $i < count($rule); $i++)
		$ruledetails.=$rule[$i]." ";
	$rule=$ruledetails;
	$exclude="-A $chain ";
	$ruledetails=str_replace($exclude,"",$ruledetails);
	echo "<tr><td colspan=2><code><b>$ruledetails</b></code></td></tr>";
	echo "<tr><td colspan=2><font color=red>".$lang["confirmdelete"]."</font></td></tr>";
	echo "<tr><td colspan=2>"
		."<input type=submit name=submit value=\"".$lang["yes"]."\"> "
		."<input type=button name=button value=\"".$lang["no"]."\" onclick=\"window.close();\"> "
		."</td></tr>"
		."<input type=hidden name=table value=$table>"
		."<input type=hidden name=chain value=$chain>"
		."<input type=hidden name=id value=\"".($id+1)."\">"
		."<input type=hidden name=rule value='$rule'>"
		."<input type=hidden name=op value=delete>"
	        ."</table>"
	        ."</form>";
}

function DeleteRule($table,$chain,$id,$rule,$lang,$iptables) {
	$cmd="$iptables -t $table -D $chain $id";
	exec("sudo ".$cmd,$output,$return);
	echo "<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><big>".$lang["delruleheader"]."</b></td></tr>";
	if ($return==0)
		echo "<tr><td colspan=2>".$lang["success"]."</td></tr>";
	else
		echo "<tr><td colspan=2>".$lang["failure"]."</td></tr>";
	echo "<tr><td colspan=2>".$lang["command"].":</td></tr><tr><td colspan=2><b><code>$cmd</code></b></td></tr>"
	    ."<tr><td colspan=2>".$lang["othercommand"].":</td></tr><tr><td colspan=2><b><code>$iptables -t $table ".str_replace("-A","-D",$rule)."</code></b></td></tr>"
	    ."<form><tr><td colspan=2 align=center><input type=button name=button value=\"".$lang["close"]."\" onclick=\"window.close()\"></td></tr></form>"
	    ."</table>";
	echo "<body onload=\"ListRules()\">";
}
?>


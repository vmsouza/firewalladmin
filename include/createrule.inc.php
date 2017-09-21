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
 
function CreateRule($type,$table,$chain,$max,$lang) {
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["makeruleheader"])."<big></b></td></tr>"
	    ."<tr><td width=20%>".$lang["table"].":</td><td>$table</td></tr>"
	    ."<tr><td>".$lang["chain"].":</td><td>$chain</td></tr>"
	    ."<tr><td>".$lang["ruletypedesc"].":</td><td>".$lang["$type"]."</td></tr>";
	if ($type=="insert") {
		echo "<tr><td colspan=2>".$lang["insertdesc"]."</td></tr>";
		echo "<tr><td>".$lang["position"].":</td><td><input type=text name=position size=".strlen($max)." maxlength=".strlen($max)." class=inputtext value=1> (".$lang["max"]." $max)</td></tr>";
	}
	$ifaces=GetInterfaces();
	sort($ifaces);
	if ($chain=="INPUT" or $chain=="PREROUTING") {
		// interface selectbox (in)
		echo "<tr><td>".$lang["ifacein"].":</td><td>"
		    ."<select name=ifacein class=inputtext>";
		for ($i=0; $i < count($ifaces); $i++) {
			if ($ifaces[$i]=="any")	{
				$iface=$lang["any"];
				echo "<option selected value=$ifaces[$i]>$iface";
			} else {
				$iface=$ifaces[$i];
				echo "<option value=\"$ifaces[$i]\">$iface";
			}
		}
		echo "</select></td></tr>";
	} elseif ($chain=="OUTPUT" or $chain=="POSTROUTING") {
		// interface selectbox (out)
		echo "<tr><td>".$lang["ifaceout"].":</td><td>"
		    ."<select name=ifaceout class=inputtext>";
		for ($i=0; $i < count($ifaces); $i++) {
			if ($ifaces[$i]=="any")	{
				$iface=$lang["any"];
				echo "<option selected value=$ifaces[$i]>$iface";
			} else {
				$iface=$ifaces[$i];
				echo "<option value=\"$ifaces[$i]\">$iface";
			}
		}
		echo "</select></td></tr>";
	} else {
		// interface selectbox (in)
		echo "<tr><td>".$lang["ifacein"].":</td><td>"
		    ."<select name=ifacein class=inputtext>";
		for ($i=0; $i < count($ifaces); $i++) {
			if ($ifaces[$i]=="any")	{
				$iface=$lang["any"];
				echo "<option selected value=$ifaces[$i]>$iface";
			} else {
				$iface=$ifaces[$i];
				echo "<option value=\"$ifaces[$i]\">$iface";
			}
		}
		echo "</select></td></tr>";
		// interface selectbox (out)
		echo "<tr><td>".$lang["ifaceout"].":</td><td>"
		    ."<select name=ifaceout class=inputtext>";
		for ($i=0; $i < count($ifaces); $i++) {
			if ($ifaces[$i]=="any")	{
				$iface=$lang["any"];
				echo "<option selected value=$ifaces[$i]>$iface";
			} else {
				$iface=$ifaces[$i];
				echo "<option value=\"$ifaces[$i]\">$iface";
			}
		}
		echo "</select></td></tr>";
	}
	$protocols=GetProtocols();
	echo "<tr><td>".$lang["protocol"].":</td><td>"
	    ."<select name=protocol class=inputtext>";
	for ($i=0; $i < count($protocols); $i++) {
		if ($protocols[$i]=="all")
			$protodesc=$lang["all"];
		else
			$protodesc=$protocols[$i];
		echo "<option value=$protocols[$i]>$protodesc";
	}
	echo "</select>";
	
	echo "</select></td></tr>"
            ."<tr><td colspan=2><input type=submit name=submit value=\"".$lang["continue"]."\"></td></tr>"
    	    ."<input type=hidden name=table value=$table>"
    	    ."<input type=hidden name=chain value=$chain>"
    	    ."<input type=hidden name=type value=$type>"
    	    ."<input type=hidden name=max value=$max>"
    	    ."<input type=hidden name=op value=create2>"
	    ."</table>"
	    ."</form>";
}

function CreateRule2($type,$table,$chain,$max,$ifacein,$ifaceout,$position,$protocol,$modules,$lang) {
	if ($type=="insert")
		$positiondesc="(".$lang["position"]." $position)";
	else
		$positiondesc="";
	echo "<form method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["makeruleheader"])."<big></b></td></tr>"
	    ."<tr><td width=20%>".$lang["table"].":</td><td>$table</td></tr>"
	    ."<tr><td>".$lang["chain"].":</td><td>$chain</td></tr>"
	    ."<tr><td>".$lang["ruletypedesc"].":</td><td>".$lang["$type"]." $positiondesc</td></tr>";
	// interface (in)
	if (isset($ifacein)) {
		if ($ifacein=="any")
			$ifacedesc=$lang["any"];
		else
			$ifacedesc=$ifacein;
		echo "<tr><td>".$lang["ifacein"].":</td><td>$ifacedesc</td></tr>";
		echo "<input type=hidden name=ifacein value=\"$ifacein\">";
	}
	// interface (out)
	if (isset($ifaceout)) {
		if ($ifaceout=="any")
			$ifacedesc=$lang["any"];
		else
			$ifacedesc=$ifaceout;
		echo "<tr><td>".$lang["ifaceout"].":</td><td>$ifacedesc</td></tr>";
		echo "<input type=hidden name=ifaceout value=\"$ifaceout\">";
	}
	// protocol
	if ($protocol=="all")
		$protodesc=$lang["all"];
	else
		$protodesc=$protocol;
	echo "<tr><td>".$lang["protocol"].":</td><td>$protodesc</td></tr>";
	echo "<input type=hidden name=protocol value=$protocol>";
	
	// modules
	echo "<tr><td colspan=2>".$lang["selmodules"]."</td></tr>";
	echo "<tr valign=top><td>".$lang["modules"].":</td><td>";
	$i=-1;
	foreach ($modules["$protocol"] as $idx => $modulename) {
		if ($i % 3 == 0 and $i < count($modules["$protocol"]) and $i != 0)
			echo "<br>";
		if ($modulename!=$protocol)
			echo "<input class=inputtext type=checkbox name=selmodules[\"$modulename\"] value=$modulename> $modulename ";
		$i++;
	}
	echo "</td></tr>";
	if ($protocol!="all") {
		echo "<tr><td>".$lang["modulepre"]."</td><td>$protocol</td></tr>";
		echo "<input type=hidden name=module[\"$protocol\"] value=$protocol>";
	}

	echo "<tr><td colspan=2><input type=submit name=submit value=\"".$lang["continue"]."\"></td></tr>";
	echo "<input type=hidden name=table value=$table>";
	echo "<input type=hidden name=chain value=$chain>";
	echo "<input type=hidden name=position value=$position>";
	echo "<input type=hidden name=op value=create3>";
	echo "</table>";
}

function CreateRule3($type,$table,$chain,$ifacein,$ifaceout,$position,$protocol,$modules,$selmodules,$targets,$lang,$ipt) {
	if ($type=="insert")
		$positiondesc="(".$lang["position"]." $position)";
	else
		$positiondesc="";
	echo "<form name=create method=post action=\"$PHP_SELF\">"
	    ."<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".strtoupper($lang["makeruleheader"])."<big></b></td></tr>"
	    ."<tr><td width=20%>".$lang["table"].":</td><td>$table</td></tr>"
	    ."<tr><td>".$lang["chain"].":</td><td>$chain</td></tr>"
	    ."<tr><td>".$lang["ruletypedesc"].":</td><td>".$lang["$type"]." $positiondesc</td></tr>";
	// interface (in)
	if (isset($ifacein)) {
		if ($ifacein=="any")
			$ifacedesc=$lang["any"];
		else
			$ifacedesc=$ifacein;
		echo "<tr><td>".$lang["ifacein"].":</td><td>$ifacedesc</td></tr>";
		echo "<input type=hidden name=ifacein value=\"$ifacein\">";
	}
	// interface (out)
	if (isset($ifaceout)) {
		if ($ifaceout=="any")
			$ifacedesc=$lang["any"];
		else
			$ifacedesc=$ifaceout;
		echo "<tr><td>".$lang["ifaceout"].":</td><td>$ifacedesc</td></tr>";
		echo "<input type=hidden name=ifaceout value=\"$ifaceout\">";
	}
	// protocol
	if ($protocol=="all")
		$protodesc=$lang["all"];
	else
		$protodesc=$protocol;
	echo "<tr><td>".$lang["protocol"].":</td><td>$protodesc</td></tr>";
	echo "<input type=hidden name=protocol value=$protocol>";

	include "modules/all.inc.php";
	if ($protocol=="tcp")		include "modules/tcp.inc.php";
	if ($protocol=="udp")		include "modules/udp.inc.php";
	if ($protocol=="icmp")		include "modules/icmp.inc.php";

	if (count($selmodules) > 0)
		foreach ($selmodules as $idx => $modulename)
			include "modules/$modulename.inc.php";

	echo "<input type=hidden name=table value=$table>";
	echo "<input type=hidden name=chain value=$chain>";
	echo "<input type=hidden name=position value=$position>";
	echo "<input type=hidden name=op value=create4>";
	echo "<tr><td colspan=2><input type=submit name=submit value=\"".$lang["add"]."\"></td></tr>";
	echo "</form>";
	echo "</table>";
}

function CreateRule4($type,$table,$chain,$ifacein,$ifaceout,$position,$protocol,$moduleoption,$lang,$ipt,$target,$rejectwith,$logprefix,$toports,$dnat,$snat,$tos,$mark,$dscp,$dscpclass) {
	$cmd="$ipt -t $table ";
	if ($type=="append")
		$cmd.="-A $chain ";
	else
		$cmd.="-I $chain $position ";
	if ($protocol!="all")
		$cmd.="-p $protocol ";
		//$cmd.="-p $protocol -m $protocol ";

	if (isset($ifacein) and $ifacein!="any")
		$cmd.="-i $ifacein ";

	if (isset($ifaceout) and $ifaceout!="any")
		$cmd.="-o $ifaceout ";

	if (isset($moduleoption["all"]) and count($moduleoption["all"] > 0)) {
		foreach ($moduleoption["all"] as $option => $value) {
			if ($value!="")
				$cmd.="$option $value ";
		}
	}

	foreach ($moduleoption as $modulename => $desc) {
		if ($modulename!="all" and $modulename!="target") {
			$cmd.="-m $modulename ";
			if ($modulename=="unclean")
				continue;
			foreach ($moduleoption["$modulename"] as $option => $value) {
				if ($option=="--ecn-tcp-cwr" and $value=="on") {
					$cmd.="--ecn-tcp-cwr ";
					continue;
				}
				if ($option=="--ecn-tcp-ece" and $value=="on") {
					$cmd.="--ecn-tcp-ece ";
					continue;
				}
				if ($option=="--ecn-ip-ect") {
					if ($value!="none" and $value!="")
						$cmd.="--ecn-ip-ect $value ";
					continue;
				}
				if ($option=="--uid-owner" and substr($value,0,1)=="!") {
					$cmd.="! $option ".substr($value,1,strlen($value)-1)." ";
					continue;
				}
				if ($option=="--gid-owner" and substr($value,0,1)=="!") {
					$cmd.="! $option ".substr($value,1,strlen($value)-1)." ";
					continue;
				}
				if ($option=="--string") {
					$cmd.="$option \"$value\" ";
					continue;
				}
				if ($option=="--comment") {
					$cmd.="$option \"$value\" ";
					continue;
				}
				if ($value!="")
					$cmd.="$option $value ";
			}
		}
	}

	// target/jump
	if ($target!="")
		$cmd.="-j $target ";
	switch($target) {
		case "REJECT"   : $cmd.="--reject-with $rejectwith "; break;
		case "LOG"      : $cmd.="--log-prefix \"$logprefix\" "; break;
		case "REDIRECT" : $cmd.="--to-ports $toports ";	break;
		case "SNAT"     : $cmd.="--to-source $snat "; break;
		case "DNAT"	: $cmd.="--to-destination $dnat "; break;
		case "TOS"	: $cmd.="--set-tos $tos "; break;
		case "MARK"	: $cmd.="--set-mark $mark "; break;
		case "DSCP"	: if ($dscp!="") $cmd.="--set-dscp $dscp ";
				  if ($dscpclass!="") $cmd.="--set-dscp-class $dscpclass" ;
				  break;
	}
	
	$file="/tmp/firewalladmin-".rand();
	echo exec("sudo $cmd &> $file",$output,$return);
	echo "<table border=0 cellspacing=2 cellpadding=2 width=100%>"
	    ."<tr bgcolor=darkorange><td colspan=2><b>".$lang["makeruleheader"]."</b></td></tr>";
	if ($return==0) {
		echo "<tr><td colspan=2>".$lang["success"]."</td></tr>";
		echo "<tr><td colspan=2>".$lang["command"].":</td></tr><tr><td colspan=2><b><code>$cmd</code></b></td></tr>";
	} else {
		echo "<tr><td colspan=2><font color=red><b>".$lang["failure"]."</b></font></td></tr><tr><td colspan=2><b><code>$cmd</code></b></td></tr>";
		echo "<tr><td colspan=2><b>".cmderror($file,$lang)."</b></td></tr>";
	}
	echo "<body onload=\"ListRules()\">";
	echo "<form><tr><td colspan=2 align=center><input type=button name=button value=\"".$lang["close"]."\" onclick=\"window.close()\"></td></tr></form>";
	echo "</table>";
}

?>


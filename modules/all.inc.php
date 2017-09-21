<?

echo ModuleOptionsHeader("all",$lang);
echo "<body onload=\"ok(1)\">";

// warning
//echo "<tr><td colspan=2><font color=red>".$lang["warning"]."</font>: ".$lang["warnprotoall"]."</td></tr>";

$isiprange=false;
if (count($selmodules) > 0) {
	foreach ($selmodules as $idx => $modulename)
		if ($modulename=="iprange")
			$isiprange=true;
}

if (!$isiprange) {
// source address
echo "<tr>"
    ."<td>".$lang["source"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[all][-s] size=30 maxlength=155></td>"
    ."</tr>";
    
// destination address
echo "<tr>"
    ."<td>".$lang["destination"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[all][-d] size=30 maxlength=155></td>"
    ."</tr>";

}

include "js/$table.inc.php";

echo "<tr>"
    ."<td>".$lang["target"].":</td>"
    ."<td><select name=target class=inputtext onchange=\"ok(document.create.target.value);\">";

if ($table=="filter") {
	if ($chain!="INPUT" and $chain!="FORWARD" and $chain!="OUTPUT") {
		foreach ($targets["$table"]["USERCHAIN"] as $idx => $value) {
			if (isset($lang["$value"])) {
				if ($value=="ACCEPT") {
					echo "<option selected value=$value>".$lang["$value"];
				} else {
					echo "<option value=$value>".$lang["$value"];
				}
			} else {
				echo "<option value=$value>$value";
			}
		}
	} else {
		foreach ($targets["$table"]["$chain"] as $idx => $value) {
			if (isset($lang["$value"])) {
				if ($value=="ACCEPT") {
					echo "<option selected value=$value>".$lang["$value"];
				} else {
					echo "<option value=$value>".$lang["$value"];
				}
			} else {
				echo "<option value=$value>$value";
			}
		}
	}
	$userchains=GetChains($table,$chain,$ipt);
} 

if ($table=="nat") {
	if ($chain!="PREROUTING" and $chain!="OUTPUT" and $chain!="POSTROUTING") {
		foreach ($targets["$table"]["USERCHAIN"] as $idx => $value) {
			if (isset($lang["$value"])) {
				if ($value=="ACCEPT") {
					echo "<option selected value=$value>".$lang["$value"];
				} else {
					echo "<option value=$value>".$lang["$value"];
				}
			} else {
				echo "<option value=$value>$value";
			}
		}
	} else {
		foreach ($targets["$table"]["$chain"] as $idx => $value) {
			if (isset($lang["$value"])) {
				if ($value=="ACCEPT") {
					echo "<option selected value=$value>".$lang["$value"];
				} else {
					echo "<option value=$value>".$lang["$value"];
				}
			} else {
				echo "<option value=$value>$value";
			}
		}
	}
	$userchains=GetChains($table,$chain,$ipt);
}

if ($table=="mangle") {
	if ($chain!="INPUT" and $chain!="FORWARD" and $chain!="OUTPUT" and $chain!="PREROUTING" and $chain!="POSTROUTING") {
		foreach ($targets["$table"]["USERCHAIN"] as $idx => $value) {
			if (isset($lang["$value"])) {
				if ($value=="ACCEPT") {
					echo "<option selected value=$value>".$lang["$value"];
				} else {
					echo "<option value=$value>".$lang["$value"];
				}
			} else {
				echo "<option value=$value>$value";
			}
		}
	} else {
		foreach ($targets["$table"]["$chain"] as $idx => $value) {
			if (isset($lang["$value"])) {
				if ($value=="ACCEPT") {
					echo "<option selected value=$value>".$lang["$value"];
				} else {
					echo "<option value=$value>".$lang["$value"];
				}
			} else {
				echo "<option value=$value>$value";
			}
		}
	}
	$userchains=GetChains($table,$chain,$ipt);
}

// show userchains
if (isset($userchains) and count($userchains) > 0) {
	for ($i=0; $i < count($userchains); $i++) {
		echo "<option value=$userchains[$i]>$userchains[$i]";
	}
}

echo "</select></td></tr>";


if ($table=="filter" or $table=="nat") {
	echo "<tr><td>".$lang["rejectwith"].":</td><td><select name=rejectwith class=inputtext>";
	if ($protocol=="tcp")
		echo "<option value=tcp-reset>".$lang["tcpreset"];
	if ($protocol=="tcp" or $protocol=="udp")
	    	echo "<option value=icmp-port-unreachable>".$lang["punreachable"];
	echo "<option value=icmp-host-unreachable>".$lang["hunreachable"]
	    ."<option value=icmp-network-unreachable>".$lang["nunreachable"];
	    
	echo "</select>"
	    ."</td></tr>";
	// log prefix
	echo "<tr><td>".$lang["logprefix"].":</td><td><input type=text class=inputtext name=logprefix size=25 maxlength=20></td></tr>";
}

//
// nat options
//

// dnat, snat and redirect
if ($table=="nat") {
	if ($chain!="POSTROUTING") {
		echo "<tr><td>".$lang["toports"].":</td><td><input type=text class=inputtext name=toports size=6 maxlength=5> ".$lang["redirtoports"]."</td></tr>";
		echo "<tr valign=top><td>".$lang["dnat"].":</td><td><input type=text class=inputtext name=dnat size=21 maxlength=20> ".$lang["dnatdesc"]."</td></tr>";
	} else {
		echo "<input type=hidden class=inputtext name=toports size=6 maxlength=5>";
		echo "<input type=hidden class=inputtext name=dnat size=21 maxlength=20>";
	}
	if ($chain!="PREROUTING") {
		echo "<tr valign=top><td>".$lang["snat"].":</td><td><input type=text class=inputtext name=snat size=21 maxlength=20> ".$lang["snatdesc"]."</td></tr>";
	} else {
		echo "<input type=hidden class=inputtext name=snat size=21 maxlength=20>";
	}
}

//
// mangle options
//

// tos
if ($table=="mangle") {
	echo "<tr><td>".$lang["tos"].":</td><td>"
	    ."<select class=inputtext name=tos>"
	    ."<option value=0x00>Normal-Service 0 (0x00)"
	    ."<option value=0x10>Minimize-Delay 16 (0x10)"
	    ."<option value=0x08>Maximize-Throughput 8 (0x08)"
	    ."<option value=0x04>Maximize-Reliability 4 (0x04)"
	    ."<option value=0x02>Minimize-Cost 2 (0x02)"
	    ."</select>"
	    ."</td></tr>";
	echo "<tr valign=top><td>".$lang["mark"].":</td><td><input type=text class=inputtext name=mark size=11 maxlength=10></td></tr>";
	echo "<tr valign=top><td>".$lang["dscp"].":</td><td><input type=text class=inputtext name=dscp size=5 maxlength=5></td></tr>";
	echo "<tr valign=top><td>".$lang["dscpclass"].":</td><td><input type=text class=inputtext name=dscpclass size=5 maxlength=5></td></tr>";
} else {
	echo "<input type=hidden name=tos>";
	echo "<input type=hidden name=mark>";
	echo "<input type=hidden name=dscp>";
	echo "<input type=hidden name=dscpclass>";
}


?>

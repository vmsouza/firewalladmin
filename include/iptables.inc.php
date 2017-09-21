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
 
function address($address) {
	if ($address=="0.0.0.0/0")
		return "Any";
	elseif ($address=="*")
		return "All";
	else
		return $address;
}

function DownRule($table,$chain,$id,$ruleid,$iptables,$lang,$iptsave) {
	$rule=getrule($table,$chain,$id,$iptsave);
	$rulearray=split(" ",$rule);
	$rule="";
	for ($i=1; $i < count($rulearray); $i++)
		$rule.=$rulearray[$i]." ";
	$cmd="$iptables -t $table -D $chain ".($ruleid+1);
	exec("sudo $cmd",$output,$return);
	$cmd=$iptables." ".str_replace("-A $chain","-t $table -I $chain ".($ruleid+2),$rule);
	exec("sudo $cmd",$output,$return);
	ListRules($table,$iptables,$lang,$iptsave,1);
}

function UpRule($table,$chain,$id,$ruleid,$iptables,$lang,$iptsave) {
	$rule=getrule($table,$chain,$id,$iptsave);
	$rulearray=split(" ",$rule);
	$rule="";
	for ($i=1; $i < count($rulearray); $i++)
		$rule.=$rulearray[$i]." ";
	$cmd="$iptables -t $table -D $chain ".($ruleid+1);
	exec("sudo $cmd",$output,$return);
	$cmd=$iptables." ".str_replace("-A $chain","-t $table -I $chain $ruleid",$rule);
	exec("sudo $cmd",$output,$return);
	ListRules($table,$iptables,$lang,$iptsave,1);
}

function getrule($table,$chain,$id,$iptsave) {
	$rules=getrules($table,$iptsave);
	return $rules["$chain"]["$id"];
}

function BeginRuleHeader($lang,$counters) {
	print "<table border=0 cellspacing=2 cellpadding=2>";
	print "<tr bgcolor=#000000><td>";
	print "<table border=0 cellspacing=2 cellpadding=2 width=100% bgcolor=white>";
	print "<tr background=\"images/tiles/bar1.png\">";
	//print "<td>Num</td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["id"]."</b></font></td>";
	if ($counters=="yes") {
		print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["pkts"]."</b></font></td>";
		print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["bytes"]."</b></font></td>";
	}
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["jump"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["proto"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["opts"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["in"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["out"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["src"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["dst"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["args"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black><b>".$lang["modules"]."</b></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black align=center><center><b>".$lang["ud"]."</b></center></font></td>";
	print "<td background=\"images/tiles/bar1.png\"><font color=black align=center><center><b>".$lang["actions"]."</b></center></font></td>";
	print "</tr>";
}

function EndRuleHeader() {
	print "</table>";
	print "</td></tr></table>";
}

function ExpandRule($table,$chain,$rule,$color,$up,$down,$id,$ruleid,$lang,$counters) {
	$data=split(" ",$rule);
	unset($i);
	$i=0;
	$ruleid++;
	$arule["00id"]=$ruleid+1;
	if ($counters=="yes") {
		$counter=split(":",$data[0]);
		$pkts=split("\[",$counter[0]);
		$bytes=split("\]",$counter[1]);
		$arule["01pkts"]=$pkts[1];
		if (strlen($bytes[0]) >= 1 and strlen($bytes[0]) <= 3 ) {
			$unit="B";
		} elseif (strlen($bytes[0]) >= 4 and strlen($bytes[0]) <= 6) {
			$unit="K";
			$bytes[0]=number_format(($bytes[0]/1024),2,",",".");
		} elseif (strlen($bytes[0]) >= 7 and strlen($bytes[0]) <= 9) {
			$unit="M";
			$bytes[0]=number_format(($bytes[0]/1024/1024),2,",",".");
		} elseif (strlen($bytes[0]) >= 10 and strlen($bytes[0]) <= 12) {
			$unit="G";
			$bytes[0]=number_format(($bytes[0]/1024/1024/1024),2,",",".");
		} elseif (strlen($bytes[0]) >= 13 and strlen($bytes[0]) <= 15) {
			$unit="T";
			$bytes[0]=number_format(($bytes[0]/1024/1024/1024),2,",",".");
		} elseif (strlen($bytes[0]) >= 16 and strlen($bytes[0]) <= 18) {
			$unit="H";
			$bytes[0]=number_format(($bytes[0]/1024/1024/1024),2,",",".");
		}
		$arule["02bytes"]=$bytes[0]."$unit";
	}
	$arule["03jump"]="";
	$arule["04proto"]=$lang["All"];
	$arule["05opt"]="";
	$arule["06in"]="*";
	$arule["07out"]="*";
	$arule["08src"]="0.0.0.0/0";
	$arule["09dst"]="0.0.0.0/0";
	$arule["10args"]="";
	$arule["11mod"]="";
	$arule["12ud"]="<center>";
	$arule["13actions"]="<center><a href=\"javascript:ReplaceRule('replace','$table','$chain','$ruleid');\"><img src=\"images/actions/update.gif\" alt=\"Update\" border=0></a> ";
	$arule["13actions"].="<a href=\"javascript:DeleteRule('$table','$chain','$id','$ruleid');\"><img src=\"images/actions/delete.gif\" alt=\"Delete\" border=0></a></center>";
	if ($up)
		$arule["12ud"].="<a href=\"firewall.php?table=$table&chain=$chain&op=up&id=$id&ruleid=$ruleid\"><img src=\"images/actions/up.gif\" alt=\"Up\" border=0></a> ";
	if ($down)
		$arule["12ud"].="<a href=\"firewall.php?table=$table&chain=$chain&op=down&id=$id&ruleid=$ruleid\"><img src=\"images/actions/down.gif\" alt=\"Down\" border=0></a>";
	$arule["12ud"].="</center>";
	
	while ($i <= count($data)) {
		//
		// interface options
		//
		if ($data[$i]=="-i") {
			$arule["06in"]=$data[$i+1];
			if ($arule["06in"]=="!")
				$arule["06in"].=" ".$data[$i+2];
			$i++;
			next;
		}
		if ($data[$i]=="-o") {
			$arule["07out"]=$data[$i+1];
			if ($arule["07out"]=="!")
				$arule["07out"].=" ".$data[$i+2];
			$i++;
			next;
		}
		//
		// target options
		//
		if ($data[$i]=="-j") {
			$jump=$data[$i+1];
			$arule["03jump"]=$data[$i+1];
			if ($arule["03jump"]=="REJECT") {
				$arule["10args"].=" <font color=red>".ucfirst($lang["rejectwith"]).":</font> ".$data[$i+3];
				$i++;
			} elseif ($arule["03jump"]=="DNAT") {
				$str=strtoupper(substr($data[$i+2],2,1)).substr($data[$i+2],3,strlen($data[$i+2]));
				$str=str_replace("-"," ",$str);
				$arule["10args"].=" <font color=red>$str:</font> ".$data[$i+3];
				$i++;
			} else {
				$i++;
			}
			if (isset($lang["$jump"]))
				$arule["03jump"]=$lang["$jump"];
			next;
		}
		//
		// log options
		//
		if ($data[$i]=="--log-prefix") {
			$arule["10args"].=" <font color=red>".$lang["logprefix"].": </font>".$data[$i+1].$data[$i+2];
			$i++;
			next;
		}
		//
		// mac options
		//
		if ($data[$i]=="--mac-source") {
			$arule["10args"].=" <font color=red>Mac: </font>";
			if ($data[$i-1]=="!")
				$arule["10args"].="! ".$data[$i+1];
			else
				$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		//
		// random options
		//
		if ($data[$i]=="--average") {
			$arule["10args"].=" <font color=red>".$lang["percentage"].": </font>";
			$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		//
		// pktype options
		//
		if ($data[$i]=="--pkt-type") {
			$arule["10args"].=" <font color=red>".$lang["pktype"].": </font>";
			$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		//
		// icmp options
		//
		if ($data[$i]=="--icmp-type") {
			$arule["10args"].=" <font color=red>".$lang["icmptype"].":</font> ";
			if ($data[$i+1]=="any")
				$arule["10args"].=$lang["any2"]." ";
			else
				$arule["10args"].=$data[$i+1]." ";
			$i++;
			next;
		}
		// src and dst options
		if ($data[$i]=="-s" or $data[$i]=="--src-range") {
			$arule["08src"]=$data[$i+1];
			if ($arule["08src"]=="!")
				$arule["08src"].=" ".$data[$i+2];
			$i++;
			next;
		}
		if ($data[$i]=="-d" or $data[$i]=="--dst-range") {
			$arule["09dst"]=$data[$i+1];
			if ($arule["09dst"]=="!")
				$arule["09dst"].=" ".$data[$i+2];
			$i++;
			next;
		}
		//
		// limit options
		//
		if ($data[$i]=="--limit") {
			$arule["10args"].=" <font color=red>".$lang["limit"].":</font> ".$data[$i+1];
			if ($data[$i+1]=="!")
				$arule["10args"].=$data[$i+2];
			$i++;
			next;
		}
		if ($data[$i]=="--limit-burst") {
			$arule["10args"].=" <font color=red>".$lang["burst"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// multiport options
		//
		if ($data[$i]=="--dports") {
			$arule["10args"].=" <font color=red>".$lang["dports"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--sports") {
			$arule["10args"].=" <font color=red>".$lang["sports"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		// 
		// tcp and upd options
		//
		if ($data[$i]=="--dport") {
			$arule["10args"].=" <font color=red>".$lang["dport"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--sport") {
			$arule["10args"].=" <font color=red>".$lang["sport"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// modules
		//
		if ($data[$i]=="-m") {
			if ($arule["11mod"]=="")
				$arule["11mod"]=$data[$i+1];
			else
				$arule["11mod"].=",".$data[$i+1];
			$i++;
			next;
		}
		// 
		// nat options
		//
		if ($data[$i]=="--to-ports") {
			$arule["10args"].=" <font color=red>".$lang["toports"].": </font>".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--ports") {
			$arule["10args"].=" <font color=red>".$lang["ports"].": </font>".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--to-source") {
			$arule["10args"].=" <font color=red>".$lang["tosource"].": </font>".$data[$i+1];
			$i++;
			next;
		}
		//
		// owner options
		if ($data[$i]=="--uid-owner") {
			$arule["10args"].=" <font color=red>".$lang["uidowner"].": </font>";
			if ($data[$i-1]=="!")
				$arule["10args"].="! ".$data[$i+1];
			else
				$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--gid-owner") {
			$arule["10args"].=" <font color=red>".$lang["gidowner"].": </font>";
			if ($data[$i-1]=="!")
				$arule["10args"].="! ".$data[$i+1];
			else
				$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--pid-owner") {
			$arule["10args"].=" <font color=red>".$lang["pidowner"].": </font>";
			if ($data[$i-1]=="!")
				$arule["10args"].="! ".$data[$i+1];
			else
				$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--sid-owner") {
			$arule["10args"].=" <font color=red>".$lang["sidowner"].": </font>";
			if ($data[$i-1]=="!")
				$arule["10args"].="! ".$data[$i+1];
			else
				$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--cmd-owner") {
			$arule["10args"].=" <font color=red>".$lang["cmdowner"].": </font>";
			if ($data[$i-1]=="!")
				$arule["10args"].="! ".$data[$i+1];
			else
				$arule["10args"].=$data[$i+1];
			$i++;
			next;
		}
		// 
		// protocol options
		//
		if ($data[$i]=="-p") {
			$proto=$data[$i+1];
			if ($proto=="!")
				$arule["04proto"]=$data[$i+1]." ".$data[$i+2];
			else
				$arule["04proto"]=$data[$i+1];
			$i++;
			next;
		}
		//
		// state options
		//
		if ($data[$i]=="--state") {
			$arule["10args"].=" <font color=red>".$lang["state"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// tcp flags
		//
		if ($data[$i]=="--tcp-flags") {
			$arule["10args"].=" <font color=red>".$lang["tcpflags"].": </font>".$data[$i+1]." ".$data[$i+2];
			$i++;
			next;
		}
		//
		// tos options
		//
		if ($data[$i]=="--set-tos") {
			$arule["10args"].=" <font color=red>TOS:</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// quota options
		//
		if ($data[$i]=="--quota") {
			$arule["10args"].=" <font color=red>".$lang["quota"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// time options
		//
		if ($data[$i]=="--timestart") {
			$arule["10args"].=" <font color=red>".$lang["timestart"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--timestop") {
			$arule["10args"].=" <font color=red>".$lang["timestop"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--datestart") {
			$arule["10args"].=" <font color=red>".$lang["datestart"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--datestop") {
			$arule["10args"].=" <font color=red>".$lang["datestop"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		if ($data[$i]=="--days") {
			$arule["10args"].=" <font color=red>".$lang["days"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// mark options
		//
		if ($data[$i]=="--set-mark") {
			$arule["10args"].=" <font color=red>".$lang["mark"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// dscp options
		//
		if ($data[$i]=="--set-dscp" or $data[$i]=="--dscp") {
			$arule["10args"].=" <font color=red>".$lang["dscp"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// ecn options
		//
		if ($data[$i]=="--ecn-tcp-cwr") {
			$arule["10args"].=" <font color=red>".$lang["ecntcpcwr"]." ";
			$i++;
			next;
		}
		if ($data[$i]=="--ecn-tcp-ece") {
			$arule["10args"].=" <font color=red>".$lang["ecntcpece"]." ";
			$i++;
			next;
		}
		if ($data[$i]=="--ecn-ip-ect") {
			$arule["10args"].=" <font color=red>".$lang["ecnipect"].":</font> ".$data[$i+1];
			$i++;
			next;
		}
		//
		// comment option
		//
		if ($data[$i]=="--comment") {
			$arule["10args"].=" <font color=red>".$lang["comment"].":</font> ";
			if (substr($data[$i+1],strlen($data[$i+1])-1,1)!='"') {
				for ($j=$i+1; $j <= count($data); $j++) {
					if (substr($data[$j],strlen($data[$j])-1,1)=='"') {
						$arule["10args"].=$data[$j]." ";
						break 1;
					} else {
						$arule["10args"].=$data[$j]." ";
					}
				}
			} else {
				$arule["10args"].=$data[$i+1]." ";
			}
			$i++;
			next;
		}
		$i++;
	}
	//$arule["00rule"]=$data[0];
	//$arule["01pkts"]=$data[1];
	//$arule["02bytes"]=$data[2];
	$i=10;
	print "<tr bgcolor=$color>";
	foreach ($arule as $idx => $string) {
		if ($idx=="12ud" or $idx=="13actions")
			print "<td width=40>$string</td>";
		else
			print "<td>$string</td>";
	}
	print "</tr>";
}

function GetRules($table,$iptsave) {
	$cmd="sudo $iptsave -c";
	exec($cmd,$output,$return);
	$found=false;
	$j=0; $k=0;
	$chains[0]="";
	for ($i=0; $i < count($output); $i++) {
		if ($output[$i]=="*$table") {
			$found=true;
			continue;
		}
		if ($output[$i]=="COMMIT" and $found==true) {
			foreach($chains as $idx => $chain)
				$rules["$chain"]["desc"]=$chain;
			$rules=str_replace('"','\#',$rules);
			return $rules;
		}
		if ($found==true and substr($output[$i],0,1)==":") {
			$chain=split(" ",$output[$i]);
			$chain=substr($chain[0],1,strlen($chain[0])-1);
			$chains[$j]=$chain;
			$j++;
			continue;
		}
		$rule=split(" ",$output[$i]);
		if ($found==true and substr($rule[0],0,1)=="[") {
			$rules["$rule[2]"]["$k"]=$output[$i];
			$k++;
		}
		
	}
	exit;
}

function ListRules($table,$iptables,$lang,$iptsave,$counters) {
	include "js/changepolicy.inc.php";
	include "js/deleterule.inc.php";
	include "js/flushchain.inc.php";
	include "js/createrule.inc.php";
	include "js/replacerule.inc.php";
	include "js/createchain.inc.php";
	include "js/delchain.inc.php";
	include "js/zerocounters.inc.php";
	include "js/renamechain.inc.php";
	print "<pre>";
	$cmd="sudo $iptables -nL -t $table | grep ^Chain";
	exec($cmd,$output,$return);
	$idx=0;
	for ($i=0; $i < count($output); $i++) {
		$chain=split(" ",$output[$i]);
		$chains[$idx]=$chain[1];
		if ($chain[2]=="(policy")
			$chaindesc["$chain[1]"]=substr($chain[3],0,strlen($chain[3])-1);
		else
			$chaindesc["$chain[1]"]=substr($chain[2],1,strlen($chain[2])-1);
		$idx++;
	}
	$rules=GetRules($table,$iptsave);
	if (count($rules)!=0) {
		foreach($chains as $idx => $chain) {
			if ($chain=="INPUT" or $chain=="FORWARD" or $chain=="OUTPUT" or $chain=="PREROUTING" or $chain=="POSTROUTING") {
				$policy=$chaindesc["$chain"];
				echo $lang["chain"]." ".$chain." (".$lang["policy"]." ".$lang["$policy"].")";
				$delchain=false;
				$renamechain=false;
			} else {
				echo $lang["chain"]." ".$chain." (".$chaindesc["$chain"]." ".$lang["references"].")";
				$delchain=true;
				$renamechain=true;
			}
			echo "<br>";
			echo "[ "
			     ."<a href=\"javascript:CreateRule('append','$table','$chain','0');\" class=a2>".$lang["append"]."</a> | "
			     ."<a href=\"javascript:CreateRule('insert','$table','$chain','".count($rules["$chain"])."');\" class=a2>".$lang["insert"]."</a> | ";
			if ($chain=="INPUT" or $chain=="FORWARD" or $chain=="OUTPUT" or $chain=="PREROUTING" or $chain=="POSTROUTING")
				echo "<a href=\"javascript:ChangePolicy('$table','$chain','$policy');\" class=a2>".$lang["policy"]."</a> | ";
			echo "<a href=\"javascript:FlushChain('$table','$chain','$policy');\" class=a2>".$lang["flush"]."</a> ";
			if ($delchain and $chaindesc["$chain"] == 0)
				echo "| <a href=\"javascript:DelChain('$table','$chain');\" class=a2>".$lang["delchain"]."</a> ";
			if ($counters=="yes")
				echo "| <a class=a2 href=\"javascript:ZeroCounters('$table','$chain');\">".$lang["zero"]."</a> ";
			if ($renamechain)
				echo "| <a class=a2 href=\"javascript:RenameChain('$table','$chain');\">".$lang["renamechain"]."</a> ";
			echo "]";
			$begintable=true;
			$color="#dcffff";
			$j=-1;
			foreach ($rules["$chain"] as $id => $rule) {
				if ($begintable) {
					BeginRuleHeader($lang,$counters);
					$begintable=false;
					$j--;
				}
				if ($color=="#dcffd1")
					$color="#dcffff";
				else
					$color="#dcffd1";
				$up=false;
				$down=false;
				if ($chain!=$rule) {
					$j++;
					$chainid=$j+2;
					$rulesinchain=count($rules["$chain"])-1;
					if ($chainid==1 and $rulesinchain > 1)
						$down=true;
					if ($chainid==$rulesinchain and $rulesinchain > 1)
						$up=true;
					if ($chainid > 1 and $chainid != $rulesinchain and $rulesinchain > 1) {
						$up=true;
						$down=true;
					}
					ExpandRule($table,$chain,$rule,$color,$up,$down,$id,$j,$lang,$counters);
				}
			}
			EndRuleHeader();
			print "<br>";
		}
	}
}


?>






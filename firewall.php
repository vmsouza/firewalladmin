<?

include "include/session.inc.php";
include "include/iptables.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";

echo "<b>".strtoupper($lang["table"]).": ".strtoupper($table)."</b> "
    ."[ <a href=\"javascript:CreateChain('$table');\" class=a2>".$lang["newchain"]."</a> ";

if ($counters=="yes")
	echo "| <a href=\"javascript:ZeroCounters('$table','all');\" class=a2>".$lang["zero"]."</a> ";
	
echo "]";
	
switch($op) {
	case "list":
		ListRules($table,$ipt,$lang,$iptsave,$counters);
		break;
	case "down":
		DownRule($table,$chain,$id,$ruleid,$ipt,$lang,$iptsave);
		break;
	case "up":
		UpRule($table,$chain,$id,$ruleid,$ipt,$lang,$iptsave);
		break;
}

include "include/footer.inc.php";
?>

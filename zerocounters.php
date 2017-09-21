<?

include "include/session.inc.php";
include "include/zerocounters.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="all";
if (!isset($op))	$op="form";
	
switch($op) {
	case "form":
		ZeroCounters($table,$chain,$lang);
		break;
	case "zerodo":
		ZeroCountersDo($table,$chain,$lang,$ipt);
		break;
}

include "include/footer.inc.php";
?>

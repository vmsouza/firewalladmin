<? include "include/session.inc.php";
   include "include/flushchain.inc.php";
   include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="INPUT";
if (!isset($policy))	$policy="ACCEPT";
if (!isset($op))	$op="form";
	
switch($op) {
	case "form":
		FlushForm($table,$chain,$policy,$lang);
		break;
	case "flush":
		FlushChain($table,$chain,$policy,$lang,$ipt);
		break;
}

include "include/footer.inc.php";
?>

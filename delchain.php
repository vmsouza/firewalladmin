<?

include "include/session.inc.php";
include "include/delchain.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="INPUT";
if (!isset($policy))	$policy="ACCEPT";
if (!isset($op))	$op="form";
	
switch($op) {
	case "form":
		DelChainForm($table,$chain,$lang);
		break;
	case "delete":
		DelChain($table,$chain,$lang,$ipt);
		break;
}

include "include/footer.inc.php";
?>

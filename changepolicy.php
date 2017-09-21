<?

include "include/session.inc.php";
include "include/changepolicy.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="INPUT";
if (!isset($policy))	$policy="ACCEPT";
if (!isset($op))	$op="form";
	
switch($op) {
	case "form":
		ShowPolicyForm($table,$chain,$policy,$lang);
		break;
	case "change":
		ChangePolicy($table,$chain,$newpolicy,$lang,$ipt);
		break;
}

include "include/footer.inc.php";

?>

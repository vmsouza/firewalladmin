<?

include "include/session.inc.php";
include "include/iptables.inc.php";
include "include/deleterule.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="INPUT";
if (!isset($id))	$id=1;
if (!isset($op))	$op="form";
	
switch($op) {
	case "form":
		ShowDeleteRuleForm($table,$chain,$ruleid,$id,$lang,$ipt,$iptsave);
		break;
	case "delete":
		DeleteRule($table,$chain,$id,$rule,$lang,$ipt);
		break;
}

include "include/footer.inc.php";
?>

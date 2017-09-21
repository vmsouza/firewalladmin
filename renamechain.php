<?

include "include/session.inc.php";
include "include/renamechain.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($op))	$op="form";
	
switch($op) {
	case "form":
		ShowRenameChainForm($table,$chain,$lang);
		break;
	case "rename":
		RenameChain($table,$chain,$newchain,$lang,$ipt);
		break;
}

include "include/footer.inc.php";
?>


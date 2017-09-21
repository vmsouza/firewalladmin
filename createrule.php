<?

include "include/session.inc.php";
include "include/functions.inc.php";
include "include/createrule.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="INPUT";
if (!isset($policy))	$policy="ACCEPT";
if (!isset($op))	$op="create";
	
switch($op) {
	case "create":
		CreateRule($type,$table,$chain,$max,$lang);
		break;
	case "create2":
		CreateRule2($type,$table,$chain,$max,$ifacein,$ifaceout,$position,$protocol,$modules,$lang);
		break;
	case "create3":
		CreateRule3($type,$table,$chain,$ifacein,$ifaceout,$position,$protocol,$modules,$selmodules,$targets,$lang,$ipt);
		break;
	case "create4":
		CreateRule4($type,$table,$chain,$ifacein,$ifaceout,$position,$protocol,$moduleoption,$lang,$ipt,$target,$rejectwith,$logprefix,$toports,$dnat,$snat,$tos,$mark,$dscp,$dscpclass);
		break;
}

include "include/footer.inc.php";

?>


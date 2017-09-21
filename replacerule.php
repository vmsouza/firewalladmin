<?

include "include/session.inc.php";
include "include/functions.inc.php";
include "include/replacerule.inc.php";
include "js/global.inc.php";

if (!isset($table))	$table="filter";
if (!isset($chain))	$chain="INPUT";
if (!isset($policy))	$policy="ACCEPT";
if (!isset($op))	$op="replace";
	
switch($op) {
	case "replace":
		ReplaceRule($type,$table,$chain,$max,$lang);
		break;
	case "replace2":
		ReplaceRule2($type,$table,$chain,$max,$ifacein,$ifaceout,$position,$protocol,$modules,$lang);
		break;
	case "replace3":
		ReplaceRule3($type,$table,$chain,$ifacein,$ifaceout,$position,$protocol,$modules,$selmodules,$targets,$lang,$ipt);
		break;
	case "replace4":
		ReplaceRule4($type,$table,$chain,$ifacein,$ifaceout,$position,$protocol,$moduleoption,$lang,$ipt,$target,$rejectwith,$logprefix,$toports,$dnat,$snat,$tos,$mark,$dscp,$dscpclass);
		break;
}

include "include/footer.inc.php";
?>

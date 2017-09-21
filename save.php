<? 

include "include/session.inc.php";
include "include/save.inc.php";
include "js/global.inc.php";

if (!isset($op))	$op="show";

switch($op) {
	case "show":
		ShowForm($iptfile,$lang);
		break;
	case "save":
		SaveFirewall($iptsave,$iptfile,$lang);
		break;
}

include "include/footer.inc.php";

?>

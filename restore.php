<?

include "include/session.inc.php";
include "include/restore.inc.php";
include "js/global.inc.php";

if (!isset($op))	$op="show";

switch($op) {
	case "show":
		ShowForm($iptfile,$lang);
		break;
	case "restore":
		RestoreFirewall($iptrestore,$iptfile,$lang);
		break;
}

include "include/footer.inc.php";

?>

<?

include "include/session.inc.php";
include "include/configuration.inc.php";
include "js/global.inc.php";

switch($op) {
	case "show":
		ConfigForm($ipt,$iptsave,$iptrestore,$iptfile,$language,$counters,$lang);
		break;
	case "save":
		ConfigSave($fipt,$fiptsave,$fiptrestore,$fiptfile,$flang,$fcounters,$lang);
		break;
}

include "include/footer.inc.php";

?>

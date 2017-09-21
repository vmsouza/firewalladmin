<?

/*
 * Author: vinicius@opentech.inf.br
 *
 * (C) 2005 by Vinicius M. de Souza <vinicius@opentech.inf.br>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 */
 
include "include/modules.inc.php";

function help($option) {
	return " <a href=\"javascript:Help('$option');\"><img src=\"images/actions/help.jpg\" border=0></a>";
}

function GetProtocols() {
	$protocols="all tcp udp icmp";
	$protocols=split(" ",$protocols);
	return $protocols;
}

function ModuleOptionsHeader($module,$lang) {
	if($module=="all")
		echo "<tr bgcolor=darkorange><td colspan=2><b>".$lang["globaloptions"]."</b></td></tr>";
	else
		echo "<tr bgcolor=darkorange><td colspan=2><b>".$lang["moduleoptions"].": $module</b></td></tr>";
}

function GetInterfaces() {
        $dir="/proc/sys/net/ipv4/conf";
        $dh=opendir($dir);
	$interfaces[0]="any";
	$i=1;
        while (($file=readdir($dh)) != false) {
		if ($file==".")		continue;
		if ($file=="..")	continue;
		if ($file=="default")	continue;
		if ($file=="all")	continue;
                $interfaces[$i]=$file;
		$i++;
                $interfaces[$i].="! $file";
		$i++;
		if ($file!="lo" and !in_array(substr($file,0,strlen($file)-1)."+",$interfaces)) {
			$interfaces[$i]=substr($file,0,strlen($file)-1)."+";
			$i++;
			$interfaces[$i]="! ".substr($file,0,strlen($file)-1)."+";
			$i++;
		}
        }
	return $interfaces;
}

function GetChains($table,$chain,$ipt) {
	$cmd="$ipt -t $table -nL | grep ^Chain";
	exec("sudo $cmd",$output,$return);
	$idx=0;
	for ($i=0; $i < count($output); $i++) {
		$chainname=split(" ",$output[$i]);
		if ($chainname[1]==$chain)
			continue;
		if ($chainname[1]!="INPUT" and $chainname[1]!="FORWARD" and $chainname[1]!="OUTPUT" and $chainname[1]!="PREROUTING" and $chainname[1]!="POSTROUTING") {
			$chains[$idx]=$chainname[1];
			$idx++;
		}
	}
	return $chains;
}

function cmdError($file,$lang) {
	$errors=file($file);
	$error="<font color=red>".$lang["return"].":</font> <code>$errors[0]</code><br>";
	$error.="<a href=\"javascript:history.back()\" class=a2>".$lang["clicktoback"]."</a>";
	unlink($file);
	return $error;
}

?>
						

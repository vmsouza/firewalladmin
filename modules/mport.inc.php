<?

echo ModuleOptionsHeader("mport",$lang);


$ismultiport=false;
if (count($selmodules) > 0) {
	foreach ($selmodules as $idx => $modulename)
		if ($modulename=="multiport")
			$ismultiport=true;
}

if (!$ismultiport) {
	echo "<tr><td colspan=2><font color=red>".$lang["mportwarn"]."</font></td></tr>";
	// source ports
	echo "<tr>"
	    ."<td>".$lang["srcports"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[mport][--sports] size=35 maxlength=200></td>"
	    ."</tr>";
    
	// destination ports
	echo "<tr>"
	    ."<td>".$lang["dstports"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[mport][--dports] size=35 maxlength=200></td>"
	    ."</tr>";
} else {
	echo "<tr><td colspan=2>".$lang["mportwarn2"]."</td></tr>";
}

?>

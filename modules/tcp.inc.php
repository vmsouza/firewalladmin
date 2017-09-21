<?

echo ModuleOptionsHeader("tcp",$lang);

$ismultiport=false;
if (count($selmodules) > 0) {
	foreach ($selmodules as $idx => $modulename)
		if ($modulename=="multiport" or $modulename=="mport")
			$ismultiport=true;
}

if (!$ismultiport) {
	// sport
	echo "<tr>"
	    ."<td>".$lang["sportdesc"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[tcp][--sport] size=12 maxlength=11> ".$lang["sdport"]."</td>"
	    ."</tr>";
    
	// dport
	echo "<tr>"
	    ."<td>".$lang["dportdesc"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[tcp][--dport] size=12 maxlength=11> ".$lang["sdport"]."</td>"
	    ."</tr>";
} else {
	echo "<tr><td colspan=2>".$lang["ismultiport"]."</td></tr>";
}
?>

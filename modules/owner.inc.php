<?

echo ModuleOptionsHeader("owner",$lang);

if ($chain=="INPUT" or $chain=="FORWARD" or $chain=="PREROUTING" or $chain=="POSTROUTING") {
	echo "<tr><td colspan=2>".$lang["ownerdesc"]."</td></tr>";
} else {
	// uid owner
	echo "<tr>"
	    ."<td>".$lang["uidowner"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[owner][--uid-owner] size=5 maxlength=6></td>"
	    ."</tr>";
	// gid owner
	echo "<tr>"
	    ."<td>".$lang["gidowner"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[owner][--gid-owner] size=5 maxlength=6></td>"
	    ."</tr>";
	// pid owner
	echo "<tr>"
	    ."<td>".$lang["pidowner"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[owner][--pid-owner] size=5 maxlength=6></td>"
	    ."</tr>";
	// sid owner
	echo "<tr>"
	    ."<td>".$lang["sidowner"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[owner][--sid-owner] size=5 maxlength=6></td>"
	    ."</tr>";
	// command owner
	echo "<tr>"
	    ."<td>".$lang["cmdowner"].":</td>"
	    ."<td><input type=text class=inputtext name=moduleoption[owner][--cmd-owner] size=26 maxlength=25></td>"
	    ."</tr>";
}
    
?>

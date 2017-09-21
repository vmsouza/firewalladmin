<?

echo ModuleOptionsHeader("multiport",$lang);

echo "<tr><td colspan=2><font color=red>".$lang["multiportwarn"]."</font></td></tr>";

// source ports
echo "<tr>"
    ."<td>".$lang["srcports"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[multiport][--sports] size=35 maxlength=200></td>"
    ."</tr>";
    
// destination ports
echo "<tr>"
    ."<td>".$lang["dstports"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[multiport][--dports] size=35 maxlength=200></td>"
    ."</tr>";
    
?>

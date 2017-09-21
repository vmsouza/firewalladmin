<?

echo ModuleOptionsHeader("limit",$lang);

echo "<tr><td colspan=2><font color=red>".$lang["limitwarn"]."</font></td></tr>";

// source ports
echo "<tr>"
    ."<td>".$lang["limit"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[limit][--limit] size=6 maxlength=10 value=1/s></td>"
    
    ."</tr>";
    
// destination ports
echo "<tr>"
    ."<td>".$lang["burst"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[limit][--limit-burst] size=6 maxlength=10></td>"
    ."</tr>";
    
?>

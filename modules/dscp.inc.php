<?

echo ModuleOptionsHeader("dscp",$lang);

// dscp
echo "<tr>"
    ."<td>".$lang["dscp"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[dscp][--dscp] size=5 maxlength=5></td>"
    ."</tr>";
// dscp class
echo "<tr>"
    ."<td>".$lang["dscpclass"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[dscp][--dscp-class] size=5 maxlength=5></td>"
    ."</tr>";
    
?>

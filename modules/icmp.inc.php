<?

echo ModuleOptionsHeader("icmp",$lang);

// mac source
echo "<tr>"
    ."<td>".$lang["icmptype"].":</td>"
    ."<td><select class=inputtext name=moduleoption[icmp][--icmp-type]>";
echo "<option value=\"\">".$lang["any2"]
    ."<option selected value=8>".$lang["echorequest"]
    ."<option value=0>".$lang["echoreply"]
    ."<option value=17>".$lang["maskrequest"]
    ."<option value=18>".$lang["maskreply"]
    ."</select>";
echo "</td>"
    ."</tr>";
    
?>

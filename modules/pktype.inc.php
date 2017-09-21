<?

echo ModuleOptionsHeader("pktype",$lang);

// pktype
echo "<tr>"
    ."<td>".$lang["pktype"].":</td>"
    ."<td><select class=inputtext name=moduleoption[pktype][--pkt-type]>";
echo "<option selected value=unicast>Unicast"
    ."<option value=broadcast>Broadcast"
    ."<option value=multicast>Multicast"
    ."</select>";
echo "</td>"
    ."</tr>";
    
?>

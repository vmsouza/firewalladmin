<?

echo ModuleOptionsHeader("ecn",$lang);

// tcp ecn cwr
echo "<tr>"
    ."<td>".$lang["ecntcpcwr"].":</td>"
    ."<td><input type=checkbox class=inputtext name=moduleoption[ecn][--ecn-tcp-cwr]> ".$lang["checktoenable"]."</td>"
    ."</tr>";
// tcp ecn ece
echo "<tr>"
    ."<td>".$lang["ecntcpece"].":</td>"
    ."<td><input type=checkbox class=inputtext name=moduleoption[ecn][--ecn-tcp-ece]> ".$lang["checktoenable"]."</td>"
    ."</tr>";
// tcp ip ect
echo "<tr>"
    ."<td>".$lang["ecnipect"].":</td>"
    ."<td>"
    ."<input type=radio class=inputtext name=moduleoption[ecn][--ecn-ip-ect] value=none> ".$lang["none"]
    ." <input type=radio class=inputtext name=moduleoption[ecn][--ecn-ip-ect] value=1> 1"
    ." <input type=radio class=inputtext name=moduleoption[ecn][--ecn-ip-ect] value=2> 2"
    ." <input type=radio class=inputtext name=moduleoption[ecn][--ecn-ip-ect] value=3> 3"
    ."</td>"
    ."</tr>";
    
?>

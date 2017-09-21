<?

echo ModuleOptionsHeader("iprange",$lang);

// source ips
echo "<tr>"
    ."<td>".$lang["source"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[iprange][--src-range] size=33 maxlength=31> IP-IP</td>"
    ."</tr>";
    
// destination ips
echo "<tr>"
    ."<td>".$lang["destination"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[iprange][--dst-range] size=33 maxlength=31> IP-IP</td>"
    ."</tr>";
    
?>

<?

echo ModuleOptionsHeader("random",$lang);

// random percentage
echo "<tr>"
    ."<td>".$lang["percentage"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[random][--average] size=3 maxlength=3 value=50> %</td>"
    ."</tr>";
    
?>

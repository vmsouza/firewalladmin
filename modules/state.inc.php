<?

echo ModuleOptionsHeader("state",$lang);

// mac source
echo "<tr>"
    ."<td>".$lang["state"].":</td>"
    ."<td>"
    ."<select type=text class=inputtext name=moduleoption[state][--state]>"
    ."<option value=NEW>NEW"
    ."<option value=RELATED>RELATED"
    ."<option value=ESTABLISHED>ESTABLISHED"
    ."<option value=NEW,RELATED>NEW,RELATED"
    ."<option value=NEW,ESTABLISHED>NEW,ESTABLISHED"
    ."<option value=RELATED,ESTABLISHED>RELATED,ESTABLISHED"
    ."<option value=NEW,RELATED,ESTABLISHED>NEW,RELATED,ESTABLISHED"
    ."<option value=INVALID>INVALID"
    ."</select>"
    ."</td>"
    ."</tr>";
    
?>

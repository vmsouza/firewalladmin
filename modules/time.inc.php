<?

echo ModuleOptionsHeader("time",$lang);

// time options
echo "<tr>"
    ."<td>".$lang["timestart"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[time][--timestart] size=6 maxlength=5> ".$lang["timeex"]."</td>"
    ."</tr>";
    
echo "<tr>"
    ."<td>".$lang["timestop"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[time][--timestop] size=6 maxlength=5> ".$lang["timeex"]."</td>"
    ."</tr>";

echo "<tr>"
    ."<td>".$lang["datestart"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[time][--datestart] size=17 maxlength=16> ".$lang["dateex"]."</td>"
    ."</tr>";

echo "<tr>"
    ."<td>".$lang["datestop"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[time][--datestop] size=17 maxlength=16> ".$lang["dateex"]."</td>"
    ."</tr>";

echo "<tr>"
    ."<td>".$lang["days"].":</td>"
    ."<td><input type=text class=inputtext name=moduleoption[time][--days] size=20 maxlength=30> ".$lang["daysex"]."</td>"
    ."</tr>";
?>

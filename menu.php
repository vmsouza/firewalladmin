<? include "include/session.inc.php"; ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" valign="top">
  <tr align=center>
	<td width=\"100%\" align=\"center\"><center><b><a href="http://firewalladmin.sf.net" target="_TOP"><img border=0 src="images/logos/logo.jpg"></a><br><? echo $lang["versiondesc"]." ".$lang["version"]; ?></b><br><br>
	<table border=0 cellspacing=2 cellpadding=2>
	
	<tr><td align=center>
	<td align=center><a href="firewall.php?table=filter&op=list" target="main"><img border=0 src="images/icons/filter.jpg" alt="<? echo $lang["filter"]; ?>"></a><br><? echo $lang["filter"]; ?></td>
	<td align=center><a href="firewall.php?table=nat&op=list" target="main"><img border=0 src="images/icons/nat.jpg" alt="<? echo $lang["nat"]; ?>"></a><br><? echo $lang["nat"]; ?></td>
	</center>
	</td></tr>
	
	<tr><td align=center>
	<td align=center><a href="firewall.php?table=mangle&op=list" target="main"><img border=0 src="images/icons/mangle.jpg" alt="<? echo $lang["mangle"]; ?>"></a><br><? echo $lang["mangle"]; ?></td>
	<td align=center><a href="configuration.php?op=show" target="main"><img border=0 src="images/icons/config.jpg" alt="<? echo $lang["config"]; ?>"></a><br><? echo $lang["config"]; ?></td>
	</center>
	</td></tr>
	
	<tr><td align=center>
	<td align=center><a href="save.php" target="main"><img border=0 src="images/icons/save.jpg" alt="<? echo $lang["save"]; ?>"></a><br><? echo $lang["save"]; ?></td>
	<td align=center><a href="restore.php" target="main"><img border=0 src="images/icons/restore.jpg" alt="<? echo $lang["restore"]; ?>"></a><br><? echo $lang["restore"]; ?></td>
	</center>
	</td></tr>
	
	<tr><td align=center>
	<td align=center colspan=2><small><br>By Vinícius M. de Souza<br>vinicius@opentech.inf.br<br><a href="http://firewalladmin.sourceforge.net" class=a2>http://firewalladmin.sf.net</a></small></td>
	</center>
	</td></tr>
	
	</table>
	</td>
  </tr>
</table>
<? include "include/footer.inc.php"; ?>

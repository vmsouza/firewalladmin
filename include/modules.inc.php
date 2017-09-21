<?

/*
 * Author: vinicius@opentech.inf.br
 *
 * (C) 2005 by Vinicius M. de Souza <vinicius@opentech.inf.br>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 */
 
$mod="mac limit iprange state time owner unclean string comment quota dscp connmark pktype random";
$modules["all"]=split(" ",$mod);

$mod="tcp state mac limit multiport mport iprange time owner unclean string comment quota dscp ecn connmark pktype random";
$modules["tcp"]=split(" ",$mod);

$mod="udp state mac limit multiport mport iprange time owner unclean string comment quota dscp connmark pktype random";
$modules["udp"]=split(" ",$mod);

$mod="icmp mac limit iprange state time owner unclean comment quota dscp connmark pktype random";
$modules["icmp"]=split(" ",$mod);

$targets["filter"]["INPUT"]	= "ACCEPT DROP REJECT LOG";
$targets["filter"]["INPUT"]	= split(" ",$targets["filter"]["INPUT"]);
$targets["filter"]["FORWARD"]	= "ACCEPT DROP REJECT LOG";
$targets["filter"]["FORWARD"]	= split(" ",$targets["filter"]["FORWARD"]);
$targets["filter"]["OUTPUT"]	= "ACCEPT DROP REJECT LOG";
$targets["filter"]["OUTPUT"]	= split(" ",$targets["filter"]["OUTPUT"]);
$targets["filter"]["USERCHAIN"]	= " ACCEPT DROP REJECT LOG RETURN";
$targets["filter"]["USERCHAIN"]	= split(" ",$targets["filter"]["USERCHAIN"]);

$targets["nat"]["PREROUTING"]	= "ACCEPT DROP REJECT DNAT REDIRECT LOG";
$targets["nat"]["PREROUTING"]	= split(" ",$targets["nat"]["PREROUTING"]);
$targets["nat"]["POSTROUTING"]	= "ACCEPT DROP REJECT SNAT MASQUERADE LOG";
$targets["nat"]["POSTROUTING"]	= split(" ",$targets["nat"]["POSTROUTING"]);
$targets["nat"]["OUTPUT"]	= "ACCEPT DROP REJECT DNAT REDIRECT LOG";
$targets["nat"]["OUTPUT"]	= split(" ",$targets["nat"]["OUTPUT"]);
$targets["nat"]["USERCHAIN"]	= " ACCEPT DROP REJECT DNAT REDIRECT SNAT MASQUERADE LOG RETURN";
$targets["nat"]["USERCHAIN"]	= split(" ",$targets["nat"]["USERCHAIN"]);

$targets["mangle"]["INPUT"]		= "TOS CONNMARK DSCP ECN MARK ROUTE TTL";
$targets["mangle"]["INPUT"]		= split(" ",$targets["mangle"]["INPUT"]);
$targets["mangle"]["FORWARD"]		= "TOS CONNMARK DSCP ECN MARK ROUTE TTL";
$targets["mangle"]["FORWARD"]		= split(" ",$targets["mangle"]["FORWARD"]);
$targets["mangle"]["OUTPUT"]		= "TOS CONNMARK DSCP ECN MARK ROUTE TTL";
$targets["mangle"]["OUTPUT"]		= split(" ",$targets["mangle"]["OUTPUT"]);
$targets["mangle"]["PREROUTING"]	= "TOS CONNMARK DSCP ECN MARK ROUTE TTL";
$targets["mangle"]["PREROUTING"]	= split(" ",$targets["mangle"]["PREROUTING"]);
$targets["mangle"]["POSTROUTING"]	= "TOS CONNMARK DSCP ECN MARK ROUTE TTL";
$targets["mangle"]["POSTROUTING"]	= split(" ",$targets["mangle"]["POSTROUTING"]);
$targets["mangle"]["USERCHAIN"]		= " TOS CONNMARK DSCP ECN MARK ROUTE TTL RETURN";
$targets["mangle"]["USERCHAIN"]		= split(" ",$targets["mangle"]["USERCHAIN"]);
?>


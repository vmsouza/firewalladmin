<?

// Translation by Herbert Monni
// herbertmonni@terra.com.br
// last update: 01/21/2005

// main
$lang["progname"]	= "Firewall Admin";
$lang["versiondesc"]	= "Version";
$lang["filter"]		= "Filter";
$lang["nat"]		= "NAT";
$lang["mangle"]		= "Mangle";
$lang["config"]		= "Config";
$lang["save"]		= "Save";
$lang["restore"]	= "Restore";
$lang["welcometo"]	= "Welcome to Firewall Admin";
$lang["welcome2"]	= "This script allows configuration and maintenance of a firewall system based on Netfilter iptables.";
$lang["sudo"]		= "So that script works properly, the installation and configuration of sudo software is necessary, check installation guide available on <a href=\"http://firewalladmin.sf.net\" target=\"_BLANK\" class=a2>site</a> for further information.";
$lang["bugs"]		= "Bugs shall be reported directly to <a href=\"http://firewalladmin.sf.net/bugs.php\" target=\"_BLANK\" class=a2>site</a> or by means of <a href=\"http://www.sf.net/projects/firewalladmin\" class=a2 target=\"_BLANK\">SourceForge</a>.";

// rules
$lang["table"]		= "Table";
$lang["delchain"]	= "Delete Chan";
$lang["append"]		= "Append";
$lang["insert"]		= "Insert";
$lang["policy"]		= "Policy";
$lang["flush"]		= "Flush";
$lang["chain"]		= "Chain";
$lang["zero"]		= "Zero counters";
$lang["renamechain"]	= "Rename Chain";

// rules tr header
$lang["pkts"]		= "Pkts";
$lang["bytes"]		= "Bytes";
$lang["id"]		= "ID";
$lang["jump"]		= "Target";
$lang["proto"]		= "Proto";
$lang["opts"]		= "Opt";
$lang["in"]		= "In";
$lang["out"]		= "Out";
$lang["src"]		= "Src";
$lang["dst"]		= "Dst";
$lang["args"]		= "Args";
$lang["modules"]	= "Modules";
$lang["ud"]		= "Up/Down";
$lang["actions"]	= "Actions";

// targets
$lang["ACCEPT"]		= "ACCEPT";
$lang["DROP"]		= "DROP";
$lang["REDIRECT"]	= "REDIRECT";
$lang["RETURN"]		= "RETURN";
$lang["SNAT"]		= "SNAT";
$lang["DNAT"]		= "DNAT";
$lang["MASQUERADE"]	= "MASQUERADE";
$lang["REJECT"]		= "REJECT";
$lang["LOG"]		= "LOG";
$lang["references"]	= "reference(s)";

// rule options
$lang["All"]		= "All";
$lang["state"]		= "State";
$lang["rejectwith"]	= "Reject with";
$lang["toports"]	= "To port";
$lang["ports"]		= "Ports";
$lang["tosource"]	= "To";
$lang["dport"]		= "DPort";
$lang["dports"]		= "DPorts";
$lang["sport"]		= "SPort";
$lang["sports"]		= "Sports";
$lang["logprefix"]	= "Log Prefix";
$lang["limit"]		= "Limit";
$lang["burst"]		= "Burst";
$lang["icmptype"]	= "ICMP Type";

// policy
$lang["chpolicyheader"]	= "Change Policy";
$lang["actualpolicy"]	= "Actual Policy";
$lang["newpolicy"]	= "New Policy";
$lang["change"]		= "Change";

// command execution
$lang["success"]	= "Command success execution!";
$lang["failure"]	= "Command execution error!";
$lang["command"]	= "This command was executed";
$lang["commands"]	= "These commands were executed";
$lang["othercommand"]	= "Another command will be executed";
$lang["return"]		= "Command return";

// delete rule
$lang["delruleheader"]	= "Delete Rule";
$lang["ruleid"]		= "Rule ID";
$lang["rulecommand"]	= "Command used to make rule";
$lang["confirmdelete"]	= "Are you sure to delete this rule?";
$lang["yes"]		= "Yes";
$lang["no"]		= "No";
$lang["ruledetails"]	= "Rule details";

// zero counters
$lang["zeroconfirm"]	= "Are you sure to zero both package and bytes counters?";
$lang["allchains"]	= "All chains in this table";

// flush chain
$lang["warning"]	= "WARNING";
$lang["flushwarning"]	= "The chain <font color=black>$chain</font> in <font color=black>$table</font> table is <font color=black>".$lang["$policy"]."</font>. If you proceed, the default policy will be set to <font color=black>".$lang["ACCEPT"]."</font>.";
$lang["flushheader"]	= "Flush Chan";
$lang["flushconfirm"]	= "Are you sure to flush all rules in this chain?";

// make and replace rules
$lang["makeruleheader"]	= "Create Rule";
$lang["chruleheader"]	= "Replace Rule";
$lang["ruletypedesc"]	= "Rule type";
$lang["insertdesc"]	= "Rule insertion may be done at any place of the chain, just specifying the position. If no position is specified, the rule will be inserted at the top of the chain.";
$lang["position"]	= "Position";
$lang["max"]		= "Max";
$lang["ifacein"]	= "Input";
$lang["ifaceout"]	= "Output";
$lang["any"]		= "Any";
$lang["any2"]		= "Any";
$lang["continue"]	= "Continue";
$lang["protocol"]	= "Protocol";
$lang["all"]		= "All";
$lang["selmodules"]	= "Select the modules you wish to use. Each module has a different option, e.g.: the option --dport only becomes available when the tcp module is selected.";
$lang["modulepre"]	= "Pre-selected:";
$lang["moduleoptions"]	= "Module options";
$lang["target"]		= "Target";
$lang["add"]		= "Add";
$lang["warnprotoall"]	= "Some global options are dependent on others. E.g.: <font color=red>".$lang["rejectwith"]."</font> works only if ".strtolower($lang["target"])." <font color=red>".$lang["REJECT"]."</font> is selected.";

// module: all
$lang["globaloptions"]	= "Global Options";
$lang["source"]		= "Source";
$lang["destination"]	= "Destination";

// module: mac
$lang["macsource"]	= "MAC";

// module: multiport
$lang["dstports"]	= "Dst Ports";
$lang["srcports"]	= "Src Ports";
$lang["multiportwarn"]	= "This module uphold up to 15 ports separated by comma.";

// module: limit
$lang["limitwarn"]	= "The limit must be specified in value/unit format. The value must be an integer and the unit must be <b>s</b> for seconds, <b>m</b> for minutes, <b>h</b> for hours or <b>d</b> for days. For burst, specify an integer.";

// jump: reject
$lang["rejectwith"]	= "Reject with";
$lang["tcpreset"]	= "TCP Reset";
$lang["hunreachable"]	= "ICMP Host Unreachable";
$lang["nunreachable"]	= "ICMP Network Unreachable";
$lang["punreachable"]	= "ICMP Port Unreachable";

// module: nat
$lang["toports"]	= "Redirect";
$lang["redirtoports"]	= "(To ports)";
$lang["dnat"]		= "Dest NAT";
$lang["dnatdesc"]	= "IP[:Port]";
$lang["snat"]		= "Source NAT";
$lang["snatdesc"]	= "IP";

// module: icmp
$lang["echorequest"]	= "Ping (ICMP echo request)";
$lang["echoreply"]	= "Pong (ICMP echo reply)";
$lang["maskrequest"]	= "Address Mask Request";
$lang["maskreply"]	= "Address Mask Reply";

// module: tcp and udp
$lang["dportdesc"]	= "Dest Port";
$lang["sportdesc"]	= "Source Port"; 
$lang["ismultiport"]	= "The source and destination ports may be specified only by multiport module options (below).";
$lang["sdport"]		= "For interval use \":\" E.g: 25:110";
$lang["tcpflags"]	= "TCP Flags";

// module: unclean
$lang["unclean"]	= "This module doesn't have options, it functions as a protection against damaged packages";

// create chain
$lang["makechainheader"]= "Create chain";
$lang["newchain"]	= "New Chain";
$lang["create"]		= "Create";

// rename chain
$lang["rename"]		= "Rename";

// delete chain
$lang["delchainheader"]	= "Delete Chain";
$lang["delchain"]	= "Delete Chain";
$lang["delchainconfirm"]= "Are you sure to delete this chain?";

// tos
$lang["tos"]		= "TOS";

// mark
$lang["mark"]		= "Mark";

// dscp
$lang["dscp"]		= "DSCP";
$lang["dscpclass"]	= "DSCP Class";

// ecn
$lang["ecntcpcwr"]	= "CWR";
$lang["ecntcpece"]	= "ECE";
$lang["ecnipect"]	= "ECT";
$lang["checktoenable"]	= "Check to enable";
$lang["none"]		= "None";

// configuration
$lang["configuration"]	= "Configuration";
$lang["ipt"]		= "Absolute path to iptables";
$lang["iptsave"]	= "Absolute path to iptables-save";
$lang["iptrestore"]	= "Absolute path to iptables-restore";
$lang["iptfile"]	= "Rules file";
$lang["showcounters"]	= "Show counters?";
$lang["configconfirm"]	= "Are you sure?";
$lang["configsaved"]	= "Configuration saved!";
$lang["language"]	= "Firewall Admin Language";

// other
$lang["moddev"]		= "Module unavailable to use.";
$lang["close"]		= "Close";
$lang["clicktoback"]	= "Click here to back";
$lang["replace"]	= "Replace";

// save and restore
$lang["svheader"]	= "Save rules to file";
$lang["svquestion"]	= "The filter, nat and mangle tables current rules will be saved at the %s file.<br><br>Are you sure?";
$lang["svok"]		= "The rules were saved at %s file.";
$lang["rsheader"]	= "Restore rules from file";
$lang["rsquestion"]	= "The %s file rules will be copied to the kernel.<br><br>Are you sure?";
$lang["rsok"]		= "The %s file rules were applied on the kernel.";

// module: owner
$lang["ownerdesc"]	= "This module only can be used in OUTPUT.";
$lang["uidowner"]	= "UID Owner";
$lang["gidowner"]	= "GID Owner";
$lang["pidowner"]	= "Process ID";
$lang["sidowner"]	= "Session ID";
$lang["cmdowner"]	= "Command";

// module: string
$lang["string"]		= "String";

// module: comment
$lang["comment"]	= "Comment";

// module: mport
$lang["mportwarn"]	= "This module support port range and up to 15 ports separated by comma. Example: 20:22,25,80,110";
$lang["mportwarn2"]	= "This module cannot be used with multiport, so it was disabled.";

// module: time
$lang["days"]		= "Days";
$lang["datestart"]	= "Start Date";
$lang["datestop"]	= "Stop Date";
$lang["timestart"]	= "Start Time";
$lang["timestop"]	= "Stop Time";
$lang["daysex"]		= "Sun,Mon,Tue,Wed,Thu,Fri or Sat (separated by comma with no spaces)";
$lang["dateex"]		= "Syntax: yyyy:mm:dd";
$lang["timeex"]		= "Syntax: HH:MM";

// module: quota
$lang["quota"]		= "Quota";
$lang["quotaex"]	= "bytes";

// module: pktype
$lang["pktype"]		= "Packet type";

// module: random
$lang["percentage"]	= "Percentage";

?>

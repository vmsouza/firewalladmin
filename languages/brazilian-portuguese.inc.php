<?

// main
$lang["progname"]	= "Firewall Admin";
$lang["versiondesc"]	= "Vers�o";
$lang["filter"]		= "Filter";
$lang["nat"]		= "NAT";
$lang["mangle"]		= "Mangle";
$lang["config"]		= "Config";
$lang["save"]		= "Salvar";
$lang["restore"]	= "Restaurar";
$lang["welcometo"]	= "Bem-vindo ao Firewall Admin";
$lang["welcome2"]	= "Este script permite a configura��o e manuten��o de um sistema de firewall baseado no Netfilter iptables.";
$lang["sudo"]		= "Para que o script funcione adequadamente � necess�rio a instala��o e configura��o do programa sudo, verifique no guia de instala��o dispon�vel no <a href=\"http://firewalladmin.sf.net\" target=\"_BLANK\" class=a2>site</a> para maiores informa��es.";
$lang["bugs"]		= "Bugs devem ser reportados diretamente no <a href=\"http://firewalladmin.sf.net\" target=\"_BLANK\" class=a2>site</a> ou atrav�s da <a href=\"http://www.sf.net/projects/firewalladmin\" class=a2 target=\"_BLANK\">SourceForge</a>.";

// rules
$lang["table"]		= "Tabela";
$lang["delchain"]	= "Apagar Cadeia";
$lang["append"]		= "Acrescentar no fim";
$lang["insert"]		= "Inserir";
$lang["policy"]		= "Pol�tica";
$lang["flush"]		= "Limpar";
$lang["chain"]		= "Cadeia";
$lang["zero"]		= "Zerar Contadores";
$lang["renamechain"]	= "Renomear Cadeia";

// rules tr header
$lang["pkts"]		= "Pac";
$lang["bytes"]		= "Bytes";
$lang["id"]		= "Num";
$lang["jump"]		= "Alvo";
$lang["proto"]		= "Proto";
$lang["opts"]		= "Opc";
$lang["in"]		= "E.";
$lang["out"]		= "S.";
$lang["src"]		= "Orig";
$lang["dst"]		= "Dest";
$lang["args"]		= "Args";
$lang["modules"]	= "M�dulos";
$lang["ud"]		= "S/D";
$lang["actions"]	= "A��es";

// targets
$lang["ACCEPT"]		= "ACEITAR";
$lang["DROP"]		= "BLOQUEAR";
$lang["REDIRECT"]	= "REDIRECIONAR";
$lang["RETURN"]		= "RETORNAR";
$lang["SNAT"]		= "SNAT";
$lang["DNAT"]		= "DNAT";
$lang["MASQUERADE"]	= "MASCARAR";
$lang["REJECT"]		= "REJEITAR";
$lang["LOG"]		= "FAZER LOG";
$lang["references"]	= "refer�ncia(s)";

// rule options
$lang["All"]		= "Todos";
$lang["state"]		= "Estado";
$lang["rejectwith"]	= "Rejeitar com";
$lang["toports"]	= "Para porta";
$lang["ports"]		= "Portas";
$lang["tosource"]	= "Para";
$lang["dport"]		= "PortaD";
$lang["dports"]		= "PortasD";
$lang["sport"]		= "PortaO";
$lang["sports"]		= "PortasO";
$lang["logprefix"]	= "Prefixo Log";
$lang["limit"]		= "Limite";
$lang["burst"]		= "Burst";
$lang["icmptype"]	= "Tipo ICMP";

// policy
$lang["chpolicyheader"]	= "Alterar Politica";
$lang["actualpolicy"]	= "Pol�tica Atual";
$lang["newpolicy"]	= "Nova Pol�tica";
$lang["change"]		= "Alterar";

// command execution
$lang["success"]	= "Comando executado com sucesso!";
$lang["failure"]	= "Erro ao executar comando!";
$lang["command"]	= "O seguinte comando foi executado";
$lang["commands"]	= "Os seguintes comandos foram executados";
$lang["othercommand"]	= "Outro comando poderia ter sido executado";
$lang["return"]		= "Retorno";

// delete rule
$lang["delruleheader"]	= "Apagar Regra";
$lang["ruleid"]		= "Nro. Regra";
$lang["rulecommand"]	= "Comando usado para criar a regra";
$lang["confirmdelete"]	= "Voc� tem certeza que deseja apagar esta regra?";
$lang["yes"]		= "Sim";
$lang["no"]		= "N�o";
$lang["ruledetails"]	= "Detalhes da regra";

// zero counters
$lang["zeroconfirm"]	= "Confirma a limpeza dos contadores de pacotes e bytes?";
$lang["allchains"]	= "Todas as cadeias desta tabela";

// flush chain
$lang["warning"]	= "ATEN��O";
$lang["flushwarning"]	= "A cadeia <font color=black>$chain</font> da tabela <font color=black>$table</font> est� com a pol�tica <font color=black>".$lang["$policy"]."</font>. Se voc� continuar, o sistema ir� reconfigurar a pol�tica padr�o para <font color=black>".$lang["ACCEPT"]."</font>.";
$lang["flushheader"]	= "Limpar Cadeia";
$lang["flushconfirm"]	= "Confirma a limpeza das regras?";

// make and replace rules
$lang["makeruleheader"]	= "Criar Regra";
$lang["chruleheader"]	= "Substituir Regra";
$lang["ruletypedesc"]	= "A��o";
$lang["insertdesc"]	= "A inser��o de regra pode ser realizada em qualquer local da cadeia, bastando especificar a posi��o. Caso n�o seja especificado nenhuma posi��o, a regra ser� inserida no topo da cadeia.";
$lang["position"]	= "Posi��o";
$lang["max"]		= "M�x";
$lang["ifacein"]	= "Entrada";
$lang["ifaceout"]	= "Sa�da";
$lang["any"]		= "Qualquer uma";
$lang["any2"]		= "Qualquer um";
$lang["continue"]	= "Continuar";
$lang["protocol"]	= "Protocolo";
$lang["all"]		= "Todos";
$lang["selmodules"]	= "Selecione os m�dulos que voc� deseja utilizar. Cada m�dulo possui uma op��o diferente, exemplo, a op��o --dport s� est� dispon�vel quando o m�dulo tcp for selecionado.";
$lang["modulepre"]	= "Pr�-selecionado:";
$lang["moduleoptions"]	= "Op��es do M�dulo";
$lang["target"]		= "Alvo";
$lang["add"]		= "Adicionar";
$lang["warnprotoall"]	= "Algumas op��es globais s�o dependentes de outras. Ex: <font color=red>".$lang["rejectwith"]."</font> s� funciona se o ".strtolower($lang["target"])." <font color=red>".$lang["REJECT"]."</font> for selecionado.";

// module: all
$lang["globaloptions"]	= "Op��es Globais";
$lang["source"]		= "Origem";
$lang["destination"]	= "Destino";

// module: mac
$lang["macsource"]	= "MAC";

// module: multiport
$lang["dstports"]	= "Portas Destino";
$lang["srcports"]	= "Portas Origem";
$lang["multiportwarn"]	= "Este m�dulo suporta no m�ximo 15 portas separadas por v�rgula.";

// module: limit
$lang["limitwarn"]	= "O limite deve ser especificado no formato valor/unidade. Valor deve ser um n�mero inteiro e a unidade deve ser <b>s</b> para segundos, <b>m</b> para minutos, <b>h</b> para hora ou <b>d</b> para dias. Para burst, especifique um n�mero inteiro.";

// jump: reject
$lang["rejectwith"]	= "Rejeitar com";
$lang["tcpreset"]	= "Resetar Conex�o";
$lang["hunreachable"]	= "ICMP M�quina Inalcan��vel";
$lang["nunreachable"]	= "ICMP Rede Inalcan��vel";
$lang["punreachable"]	= "ICMP Porta Inalcan��vel";

// module: nat
$lang["toports"]	= "Redirecionar";
$lang["redirtoports"]	= "(Para as portas)";
$lang["dnat"]		= "NAT Destino";
$lang["dnatdesc"]	= "IP[:Porta]";
$lang["snat"]		= "NAT Origem";
$lang["snatdesc"]	= "IP";

// module: icmp
$lang["echorequest"]	= "Solicita��o de Ping";
$lang["echoreply"]	= "Resposta de Ping";
$lang["maskrequest"]	= "Solicita��o de M�scara de Rede";
$lang["maskreply"]	= "Resposta de M�scara de Rede";

// module: tcp and udp
$lang["dportdesc"]	= "Porta Destino";
$lang["sportdesc"]	= "Porta Origem"; 
$lang["ismultiport"]	= "As portas origem e destino s� podem ser especificadas atrav�s das op��es do m�dulo multiport (abaixo).";
$lang["sdport"]		= "Para intervalo use \":\" Ex: 25:110";
$lang["tcpflags"]	= "TCP Flags";

// module: unclean
$lang["unclean"]	= "Este m�dulo n�o possui op��es, serve como prote��o contra pacotes danificados";

// create chain
$lang["makechainheader"]= "Criar cadeia";
$lang["newchain"]	= "Criar Cadeia";
$lang["create"]		= "Criar";

// rename chain
$lang["rename"]		= "Renomear";

// delete chain
$lang["delchainheader"]	= "Apagar Cadeia";
$lang["delchain"]	= "Apagar Cadeia";
$lang["delchainconfirm"]= "Confirma a exclus�o da cadeia?";

// tos
$lang["tos"]		= "TOS";

// mark
$lang["mark"]		= "Marca";

// dscp
$lang["dscp"]		= "DSCP";
$lang["dscpclass"]	= "Classe DSCP";

// ecn
$lang["ecntcpcwr"]	= "CWR";
$lang["ecntcpece"]	= "ECE";
$lang["ecnipect"]	= "ECT";
$lang["checktoenable"]	= "Selecione para ativar";
$lang["none"]		= "Desabilitado";

// configuration
$lang["configuration"]	= "CONFIGURA��O";
$lang["ipt"]		= "Caminho completo do iptables";
$lang["iptsave"]	= "Caminho completo do iptables-save";
$lang["iptrestore"]	= "Caminho completo do iptables-restore";
$lang["iptfile"]	= "Arquivo de regras";
$lang["showcounters"]	= "Exibir contadores?";
$lang["configconfirm"]	= "Confirma a altera��o?";
$lang["configsaved"]	= "A configura��o foi salva!";
$lang["language"]	= "Idioma do Firewall Admin";

// other
$lang["moddev"]		= "Este m�dulo ainda n�o est� dispon�vel para uso.";
$lang["close"]		= "Fechar";
$lang["clicktoback"]	= "Clique aqui para voltar";
$lang["replace"]	= "Substituir";

// save and restore
$lang["svheader"]	= "Salvar regras em arquivo";
$lang["svquestion"]	= "As regras atuais das tabelas filter, nat e mangle ser�o salvas no arquivo %s.<br><br>Deseja prosseguir?";
$lang["svok"]		= "As regras foram salvas no arquivo %s.";
$lang["rsheader"]	= "Restaurar regras do arquivo";
$lang["rsquestion"]	= "As regras do arquivo %s ser�o copiadas para o kernel.<br><br>Deseja prosseguir?";
$lang["rsok"]		= "As regras do arquivo %s foram aplicadas no kernel.";

// module: owner
$lang["ownerdesc"]	= "O m�dulo owner s� pode ser utilizado na cadeia OUTPUT";
$lang["uidowner"]	= "UID Owner";
$lang["gidowner"]	= "GID Owner";
$lang["pidowner"]	= "Process ID";
$lang["sidowner"]	= "Session ID";
$lang["cmdowner"]	= "Comando";

// module: string
$lang["string"]		= "String";

// module: comment
$lang["comment"]	= "Coment�rio";

// module: mport
$lang["mportwarn"]	= "Este m�dulo suporta intervalos e no m�ximo 15 portas separadas por v�rgula. Exemplo: 20:22,25,80,110";
$lang["mportwarn2"]	= "Este m�dulo n�o pode ser utilizado com o multiport, por isso foi desabilitado.";

// module: time
$lang["days"]		= "Dias";
$lang["datestart"]	= "Data In�cio";
$lang["datestop"]	= "Data Fim";
$lang["timestart"]	= "Hora In�cio";
$lang["timestop"]	= "Hora Fim";
$lang["daysex"]		= "Sun,Mon,Tue,Wed,Thu,Fri ou Sat (separados por v�rgula e sem espa�o)";
$lang["dateex"]		= "Sintaxe: aaaa:mm:dd";
$lang["timeex"]		= "Sintaxe: HH:MM";

// module: quota
$lang["quota"]		= "Cota";
$lang["quotaex"]	= "bytes";

// module: pktype
$lang["pktype"]		= "Tipo de pacote";

// module: random
$lang["percentage"]	= "Percentual";

?>

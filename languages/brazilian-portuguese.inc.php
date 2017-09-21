<?

// main
$lang["progname"]	= "Firewall Admin";
$lang["versiondesc"]	= "Versão";
$lang["filter"]		= "Filter";
$lang["nat"]		= "NAT";
$lang["mangle"]		= "Mangle";
$lang["config"]		= "Config";
$lang["save"]		= "Salvar";
$lang["restore"]	= "Restaurar";
$lang["welcometo"]	= "Bem-vindo ao Firewall Admin";
$lang["welcome2"]	= "Este script permite a configuração e manutenção de um sistema de firewall baseado no Netfilter iptables.";
$lang["sudo"]		= "Para que o script funcione adequadamente é necessário a instalação e configuração do programa sudo, verifique no guia de instalação disponível no <a href=\"http://firewalladmin.sf.net\" target=\"_BLANK\" class=a2>site</a> para maiores informações.";
$lang["bugs"]		= "Bugs devem ser reportados diretamente no <a href=\"http://firewalladmin.sf.net\" target=\"_BLANK\" class=a2>site</a> ou através da <a href=\"http://www.sf.net/projects/firewalladmin\" class=a2 target=\"_BLANK\">SourceForge</a>.";

// rules
$lang["table"]		= "Tabela";
$lang["delchain"]	= "Apagar Cadeia";
$lang["append"]		= "Acrescentar no fim";
$lang["insert"]		= "Inserir";
$lang["policy"]		= "Política";
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
$lang["modules"]	= "Módulos";
$lang["ud"]		= "S/D";
$lang["actions"]	= "Ações";

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
$lang["references"]	= "referência(s)";

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
$lang["actualpolicy"]	= "Política Atual";
$lang["newpolicy"]	= "Nova Política";
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
$lang["confirmdelete"]	= "Você tem certeza que deseja apagar esta regra?";
$lang["yes"]		= "Sim";
$lang["no"]		= "Não";
$lang["ruledetails"]	= "Detalhes da regra";

// zero counters
$lang["zeroconfirm"]	= "Confirma a limpeza dos contadores de pacotes e bytes?";
$lang["allchains"]	= "Todas as cadeias desta tabela";

// flush chain
$lang["warning"]	= "ATENÇÃO";
$lang["flushwarning"]	= "A cadeia <font color=black>$chain</font> da tabela <font color=black>$table</font> está com a política <font color=black>".$lang["$policy"]."</font>. Se você continuar, o sistema irá reconfigurar a política padrão para <font color=black>".$lang["ACCEPT"]."</font>.";
$lang["flushheader"]	= "Limpar Cadeia";
$lang["flushconfirm"]	= "Confirma a limpeza das regras?";

// make and replace rules
$lang["makeruleheader"]	= "Criar Regra";
$lang["chruleheader"]	= "Substituir Regra";
$lang["ruletypedesc"]	= "Ação";
$lang["insertdesc"]	= "A inserção de regra pode ser realizada em qualquer local da cadeia, bastando especificar a posição. Caso não seja especificado nenhuma posição, a regra será inserida no topo da cadeia.";
$lang["position"]	= "Posição";
$lang["max"]		= "Máx";
$lang["ifacein"]	= "Entrada";
$lang["ifaceout"]	= "Saída";
$lang["any"]		= "Qualquer uma";
$lang["any2"]		= "Qualquer um";
$lang["continue"]	= "Continuar";
$lang["protocol"]	= "Protocolo";
$lang["all"]		= "Todos";
$lang["selmodules"]	= "Selecione os módulos que você deseja utilizar. Cada módulo possui uma opção diferente, exemplo, a opção --dport só está disponível quando o módulo tcp for selecionado.";
$lang["modulepre"]	= "Pré-selecionado:";
$lang["moduleoptions"]	= "Opções do Módulo";
$lang["target"]		= "Alvo";
$lang["add"]		= "Adicionar";
$lang["warnprotoall"]	= "Algumas opções globais são dependentes de outras. Ex: <font color=red>".$lang["rejectwith"]."</font> só funciona se o ".strtolower($lang["target"])." <font color=red>".$lang["REJECT"]."</font> for selecionado.";

// module: all
$lang["globaloptions"]	= "Opções Globais";
$lang["source"]		= "Origem";
$lang["destination"]	= "Destino";

// module: mac
$lang["macsource"]	= "MAC";

// module: multiport
$lang["dstports"]	= "Portas Destino";
$lang["srcports"]	= "Portas Origem";
$lang["multiportwarn"]	= "Este módulo suporta no máximo 15 portas separadas por vírgula.";

// module: limit
$lang["limitwarn"]	= "O limite deve ser especificado no formato valor/unidade. Valor deve ser um número inteiro e a unidade deve ser <b>s</b> para segundos, <b>m</b> para minutos, <b>h</b> para hora ou <b>d</b> para dias. Para burst, especifique um número inteiro.";

// jump: reject
$lang["rejectwith"]	= "Rejeitar com";
$lang["tcpreset"]	= "Resetar Conexão";
$lang["hunreachable"]	= "ICMP Máquina Inalcançável";
$lang["nunreachable"]	= "ICMP Rede Inalcançável";
$lang["punreachable"]	= "ICMP Porta Inalcançável";

// module: nat
$lang["toports"]	= "Redirecionar";
$lang["redirtoports"]	= "(Para as portas)";
$lang["dnat"]		= "NAT Destino";
$lang["dnatdesc"]	= "IP[:Porta]";
$lang["snat"]		= "NAT Origem";
$lang["snatdesc"]	= "IP";

// module: icmp
$lang["echorequest"]	= "Solicitação de Ping";
$lang["echoreply"]	= "Resposta de Ping";
$lang["maskrequest"]	= "Solicitação de Máscara de Rede";
$lang["maskreply"]	= "Resposta de Máscara de Rede";

// module: tcp and udp
$lang["dportdesc"]	= "Porta Destino";
$lang["sportdesc"]	= "Porta Origem"; 
$lang["ismultiport"]	= "As portas origem e destino só podem ser especificadas através das opções do módulo multiport (abaixo).";
$lang["sdport"]		= "Para intervalo use \":\" Ex: 25:110";
$lang["tcpflags"]	= "TCP Flags";

// module: unclean
$lang["unclean"]	= "Este módulo não possui opções, serve como proteção contra pacotes danificados";

// create chain
$lang["makechainheader"]= "Criar cadeia";
$lang["newchain"]	= "Criar Cadeia";
$lang["create"]		= "Criar";

// rename chain
$lang["rename"]		= "Renomear";

// delete chain
$lang["delchainheader"]	= "Apagar Cadeia";
$lang["delchain"]	= "Apagar Cadeia";
$lang["delchainconfirm"]= "Confirma a exclusão da cadeia?";

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
$lang["configuration"]	= "CONFIGURAÇÃO";
$lang["ipt"]		= "Caminho completo do iptables";
$lang["iptsave"]	= "Caminho completo do iptables-save";
$lang["iptrestore"]	= "Caminho completo do iptables-restore";
$lang["iptfile"]	= "Arquivo de regras";
$lang["showcounters"]	= "Exibir contadores?";
$lang["configconfirm"]	= "Confirma a alteração?";
$lang["configsaved"]	= "A configuração foi salva!";
$lang["language"]	= "Idioma do Firewall Admin";

// other
$lang["moddev"]		= "Este módulo ainda não está disponível para uso.";
$lang["close"]		= "Fechar";
$lang["clicktoback"]	= "Clique aqui para voltar";
$lang["replace"]	= "Substituir";

// save and restore
$lang["svheader"]	= "Salvar regras em arquivo";
$lang["svquestion"]	= "As regras atuais das tabelas filter, nat e mangle serão salvas no arquivo %s.<br><br>Deseja prosseguir?";
$lang["svok"]		= "As regras foram salvas no arquivo %s.";
$lang["rsheader"]	= "Restaurar regras do arquivo";
$lang["rsquestion"]	= "As regras do arquivo %s serão copiadas para o kernel.<br><br>Deseja prosseguir?";
$lang["rsok"]		= "As regras do arquivo %s foram aplicadas no kernel.";

// module: owner
$lang["ownerdesc"]	= "O módulo owner só pode ser utilizado na cadeia OUTPUT";
$lang["uidowner"]	= "UID Owner";
$lang["gidowner"]	= "GID Owner";
$lang["pidowner"]	= "Process ID";
$lang["sidowner"]	= "Session ID";
$lang["cmdowner"]	= "Comando";

// module: string
$lang["string"]		= "String";

// module: comment
$lang["comment"]	= "Comentário";

// module: mport
$lang["mportwarn"]	= "Este módulo suporta intervalos e no máximo 15 portas separadas por vírgula. Exemplo: 20:22,25,80,110";
$lang["mportwarn2"]	= "Este módulo não pode ser utilizado com o multiport, por isso foi desabilitado.";

// module: time
$lang["days"]		= "Dias";
$lang["datestart"]	= "Data Início";
$lang["datestop"]	= "Data Fim";
$lang["timestart"]	= "Hora Início";
$lang["timestop"]	= "Hora Fim";
$lang["daysex"]		= "Sun,Mon,Tue,Wed,Thu,Fri ou Sat (separados por vírgula e sem espaço)";
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

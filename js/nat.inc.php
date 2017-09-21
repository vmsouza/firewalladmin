<script>
function ok(_v) {
  if (_v == "REDIRECT") {
  	document.create.toports.disabled=false;
	document.create.toports.style.backgroundColor="#ebebd3";
	document.create.toports.value="";
  	document.create.logprefix.disabled=true;
	document.create.logprefix.value="";
	document.create.logprefix.style.backgroundColor="lightgrey";
  	document.create.dnat.disabled=true;
  	document.create.dnat.value="";
  	document.create.dnat.style.backgroundColor="lightgrey";
  	document.create.snat.disabled=true;
  	document.create.snat.value="";
  	document.create.snat.style.backgroundColor="lightgrey";
  	document.create.rejectwith.disabled=true;
  	document.create.rejectwith.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "SNAT") {
  	document.create.snat.disabled=false;
	document.create.snat.style.backgroundColor="#ebebd3";
  	document.create.logprefix.disabled=true;
	document.create.logprefix.value="";
	document.create.logprefix.style.backgroundColor="lightgrey";
  	document.create.toports.disabled=true;
  	document.create.toports.value="";
  	document.create.toports.style.backgroundColor="lightgrey";
  	document.create.snat.disabled=true;
  	document.create.dnat.value="";
  	document.create.dnat.style.backgroundColor="lightgrey";
  	document.create.rejectwith.disabled=true;
  	document.create.rejectwith.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "DNAT") {
  	document.create.dnat.disabled=false;
	document.create.dnat.style.backgroundColor="#ebebd3";
  	document.create.logprefix.disabled=true;
	document.create.logprefix.value="";
	document.create.logprefix.style.backgroundColor="lightgrey";
  	document.create.toports.disabled=true;
  	document.create.toports.value="";
  	document.create.toports.style.backgroundColor="lightgrey";
  	document.create.snat.disabled=true;
  	document.create.snat.value="";
  	document.create.snat.style.backgroundColor="lightgrey";
  	document.create.rejectwith.disabled=true;
  	document.create.rejectwith.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "REJECT") {
  	document.create.rejectwith.disabled=false;
	document.create.rejectwith.style.backgroundColor="#ebebd3";
  	document.create.logprefix.disabled=true;
	document.create.logprefix.value="";
	document.create.logprefix.style.backgroundColor="lightgrey";
  	document.create.toports.disabled=true;
  	document.create.toports.value="";
  	document.create.toports.style.backgroundColor="lightgrey";
  	document.create.dnat.disabled=true;
  	document.create.dnat.value="";
  	document.create.dnat.style.backgroundColor="lightgrey";
  	document.create.snat.disabled=true;
  	document.create.snat.value="";
  	document.create.snat.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "LOG") {
  	document.create.logprefix.disabled=false;
	document.create.logprefix.style.backgroundColor="#ebebd3";
  	document.create.rejectwith.disabled=true;
	document.create.rejectwith.style.backgroundColor="lightgrey";
  	document.create.toports.disabled=true;
  	document.create.toports.value="";
  	document.create.toports.style.backgroundColor="lightgrey";
  	document.create.dnat.disabled=true;
  	document.create.dnat.value="";
  	document.create.dnat.style.backgroundColor="lightgrey";
  	document.create.snat.disabled=true;
  	document.create.snat.value="";
  	document.create.snat.style.backgroundColor="lightgrey";
	return true;
  }
  document.create.rejectwith.disabled=true;
  document.create.rejectwith.style.backgroundColor="lightgrey";
  document.create.logprefix.disabled=true;
  document.create.logprefix.value="";
  document.create.logprefix.style.backgroundColor="lightgrey";
  document.create.toports.disabled=true;
  document.create.toports.value="";
  document.create.toports.style.backgroundColor="lightgrey";
  document.create.dnat.disabled=true;
  document.create.dnat.value="";
  document.create.dnat.style.backgroundColor="lightgrey";
  document.create.snat.disabled=true;
  document.create.snat.value="";
  document.create.snat.style.backgroundColor="lightgrey";
  return true;
}
</script>


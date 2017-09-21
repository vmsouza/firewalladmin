<script>
function ok(_v) {
  if (_v == "TOS") {
  	document.create.tos.disabled=false;
	document.create.tos.style.backgroundColor="#ebebd3";
  	document.create.mark.disabled=true;
	document.create.mark.value="";
	document.create.mark.style.backgroundColor="lightgrey";
  	document.create.dscp.disabled=true;
  	document.create.dscp.value="";
  	document.create.dscp.style.backgroundColor="lightgrey";
  	document.create.dscpclass.disabled=true;
  	document.create.dscpclass.value="";
  	document.create.dscpclass.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "MARK") {
  	document.create.mark.disabled=false;
	document.create.mark.value="";
	document.create.mark.style.backgroundColor="#ebebd3";
  	document.create.tos.disabled=true;
	document.create.tos.style.backgroundColor="lightgrey";
  	document.create.dscp.disabled=true;
  	document.create.dscp.value="";
  	document.create.dscp.style.backgroundColor="lightgrey";
  	document.create.dscpclass.disabled=true;
  	document.create.dscpclass.value="";
  	document.create.dscpclass.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "DSCP") {
  	document.create.dscp.disabled=false;
	document.create.dscp.value="";
	document.create.dscp.style.backgroundColor="#ebebd3";
  	document.create.dscpclass.disabled=false;
	document.create.dscpclass.value="";
	document.create.dscpclass.style.backgroundColor="#ebebd3";
  	document.create.tos.disabled=true;
	document.create.tos.style.backgroundColor="lightgrey";
  	document.create.mark.disabled=true;
  	document.create.mark.value="";
  	document.create.mark.style.backgroundColor="lightgrey";
	return true;
  }
  if (document.create.target.value=="TOS") {
  	document.create.tos.disabled=false;
	document.create.tos.style.backgroundColor="#ebebd3";
  } else {
  	document.create.tos.disabled=true;
	document.create.tos.style.backgroundColor="lightgrey";
  }
  document.create.mark.disabled=true;
  document.create.mark.value="";
  document.create.mark.style.backgroundColor="lightgrey";
  document.create.dscp.disabled=true;
  document.create.dscp.value="";
  document.create.dscp.style.backgroundColor="lightgrey";
  document.create.dscpclass.disabled=true;
  document.create.dscpclass.value="";
  document.create.dscpclass.style.backgroundColor="lightgrey";
  return true;
}
</script>


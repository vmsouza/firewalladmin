<script>
function ok(_v) {
  if (_v == "REJECT") {
  	document.create.rejectwith.disabled=false;
	document.create.rejectwith.style.backgroundColor="#ebebd3";
  	document.create.logprefix.disabled=true;
	document.create.logprefix.value="";
	document.create.logprefix.style.backgroundColor="lightgrey";
	return true;
  }
  if (_v == "LOG") {
  	document.create.logprefix.disabled=false;
	document.create.logprefix.style.backgroundColor="#ebebd3";
  	document.create.rejectwith.disabled=true;
	document.create.rejectwith.style.backgroundColor="lightgrey";
	return true;
  }
  document.create.rejectwith.disabled=true;
  document.create.rejectwith.style.backgroundColor="lightgrey";
  document.create.logprefix.disabled=true;
  document.create.logprefix.value="";
  document.create.logprefix.style.backgroundColor="lightgrey";
  return true;
}
</script>


function tambah( elem ) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("display").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "tambah?val=" + elem.value, true);
	xhttp.send();
}

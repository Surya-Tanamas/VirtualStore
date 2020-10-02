function checking(elem) {
	var value = elem.value;
	var match0 = value.match(/[0-9]/);
	var match1 = value.match(/[A-Z]/);
	var match2 = value.match(/[a-z]/);
	var success = "border border-success form-control";
	var failed = "border border-danger form-control";
	
	if( match0 && match1 && match2 ) {
		elem.className = success;
		document.getElementById("msg").innerHTML = null;
		document.getElementById("submit").disabled = false;
	} else {
		elem.className = failed;
		document.getElementById("msg").innerHTML = "Password harus terdiri dari HURUF BESAR, huruf kecil dan angka !";
		document.getElementById("submit").disabled = true;
	}
}
function matching() {
	var pass0 = document.getElementById("password");
	var pass1 = document.getElementById("password1");
	var success = "border border-success form-control";
	var failed = "border border-danger form-control";
	
	if( pass0.value == pass1.value ){
		pass0.className = success;
		pass1.className = success;
		document.getElementById("msg1").innerHTML = null;
		document.getElementById("submit").disabled = false;
	} else {
		pass0.className = failed;
		pass1.className = failed;
		document.getElementById("msg1").innerHTML = "Password yang anda masukan tidak sesuai !";
		document.getElementById("submit").disabled = true;
	}
}
function update( elem, num ) {
	var i;
	var harga, jumlah;
	var total = null;
	var display;
	for (i = 1; i <= num; i++) {
		var hrgid = 'harga'+i;
		var qtyid = 'jumlah'+i;
		harga = document.getElementById(hrgid).value;
		jumlah = document.getElementById(qtyid).value;
		total += harga * jumlah;
	}
	display = total.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
	document.getElementById('total').value = display;
}

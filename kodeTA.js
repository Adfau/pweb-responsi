//Kalkulator
function hitung() {
	var a = document.getElementById('kalk');
	hasil = parseFloat(eval(a.value));
	if (isNaN (hasil)) hasil = 0.0;
	alert ("Hasil = " + hasil);
}
function bersihkan() {
	var a = document.getElementById('kalk');
	a.value = "";
}

//Menghitung score
function score2() {
	var a1 = document.getElementById('a1t');
	var a2 = document.getElementById('a2t');
	var a3 = document.getElementById('a3t');
	var a4 = document.getElementById('a4t');
	var a5 = document.getElementById('a5t');

	var score = 0;
	if (a1.checked) {
		score += 20;
	}
	if (a2.checked) {
		score += 10;
	}
	if (a3.checked) {
		score += 20;
	}
	if (a4.checked) {
		score += 25;
	}
	if (a5.checked) {
		score += 25;
	}

	var hskor = document.getElementById('scores');
	hskor.value = score;
}
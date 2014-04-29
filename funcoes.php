<?php

function gCocaForte($qtdRefri){
	
	if($qtdRefri < 50 OR $qtdRefri >54){
		return 0;
	}if (50 <= $qtdRefri AND $qtdRefri <52) {
		return 1;
	}if (52 <= $qtdRefri AND $qtdRefri <= 54) {
		return (54-$qtdRefri)/(54-52);
	}
	else return 0;
}
echo gCocaForte(51) .' ';

function gCocaSuave ($qtdRefri){
	if ($qtdRefri <= 52 OR $qtdRefri >= 58) {
		return 0;
	}
	if (52 < $qtdRefri AND $qtdRefri < 54) {
		return ($qtdRefri - 52) / (54 - 52);
	}
	if (54 <= $qtdRefri AND $qtdRefri <= 56) {
		return 1;
	}
	if (56 < $qtdRefri AND $qtdRefri < 58) {
		return (58 - $qtdRefri) / (58 - 56);
	} else {
		return 0;
	}
}
echo gCocaSuave(50). ' ';

function gCocaFraca ($qtdRefri){
	if($qtdRefri <= 56 OR $qtdRefri >60){
		return 0;
	}
	if (56 < $qtdRefri AND $qtdRefri >58) {
		return ($qtdRefri-56)/(58-56);
	}
	if (58 <= $qtdRefri and $qtdRefri < 60) {
		return 1;
	} else {
		return 0;
	}
}

echo gCocaFraca(57);

<<<<<<< HEAD
function gPepsiForte($qtdRefri){

	if($qtdRefri < 60 OR $qtdRefri >64){
		return 0;
	}if (60 <= $qtdRefri AND $qtdRefri <62) {
		return 1;
	}if (62 <= $qtdRefri AND $qtdRefri <= 64) {
		return (64-$qtdRefri)/(64-62);
	}
	else return 0;
}
echo gPepsiForte(61) .' ';

function gPepsiSuave ($qtdRefri){
	if ($qtdRefri <= 62 OR $qtdRefri >= 68) {
		return 0;
	}
	if (62 < $qtdRefri AND $qtdRefri < 64) {
		return ($qtdRefri - 62) / (64 - 62);
	}
	if (64 <= $qtdRefri AND $qtdRefri <= 66) {
		return 1;
	}
	if (56 < $qtdRefri AND $qtdRefri < 58) {
		return (68 - $qtdRefri) / (68 - 66);
	} else {
		return 0;
	}
}
echo gPepsiSuave(60). ' ';

function gPepsiFraca ($qtdRefri){
	if($qtdRefri <= 66 OR $qtdRefri >70){
		return 0;
	}
	if (66 < $qtdRefri AND $qtdRefri >68) {
		return ($qtdRefri-66)/(68-66);
	}
	if (68 <= $qtdRefri and $qtdRefri < 70) {
		return 1;
	} else {
		return 0;
	}
}

echo gPepsiFraca(67). ' ';

function  gRunForte($qtdRun) {
	if ($qtdRun <= 23 || $qtdRun > 30) {
		return 0;
	}
	if (23 < $qtdRun && $qtdRun < 28) {
		return ($qtdRun - 23) / (28 - 23);
	}
	if (28 <= $qtdRun && $qtdRun <= 30) {
		return 1;
	} else {
		return 0;
	}
}
echo gRunForte(26). ' ';

function  gRunSuave($qtdRun) {
	if ($qtdRun <= 15 || $qtdRun >= 27) {
		return 0;
	}
	if (15 < $qtdRun && $qtdRun < 20) {
		return ($qtdRun - 15) / (20 - 15);
	}
	if (20 <= $qtdRun && $qtdRun <= 25) {
		return 1;
	}
	if (25 < $qtdRun && $qtdRun < 27) {
		return (27-$qtdRun) / (27 - 25);
	} else {
		return 0;
	}
}
echo gRunSuave(26). ' ';

function gRunFraco($qtdRun) {
	if ($qtdRun < 10 || $qtdRun >= 20) {
		return 0;
	}
	if (10 <= $qtdRun && $qtdRun <= 15) {
		return 1;
	}
	if (15 < $qtdRun && $qtdRun < 20) {
		return (20 - $qtdRun) / (20 - 15);
	} else {
		return 0;
	}
}
echo gRunFraco(17). ' ';

//GELO
function gGelo($qtdGelo) {
	if ($qtdGelo == 20) {
		return 1;
	} else {
		return 0;
	}
}

=======
>>>>>>> 4992ad3fefade573ca5547866683667f28b9308d
?>
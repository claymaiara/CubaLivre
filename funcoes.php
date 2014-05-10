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
#echo 'CocaForte: '.gCocaForte(51) .' <br> ';

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
#echo 'CocaSuave: '.gCocaSuave(50). ' <br> ';

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

#echo 'CocaFraca: '.gCocaFraca(57). ' <br>';

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
#echo 'PepsiForte: '.gPepsiForte(61) .'<br> ';

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
#echo 'PepsiSuave: '.gPepsiSuave(60). '<br> ';

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

#echo 'PepsiFraca: '.gPepsiFraca(67). ' <br> ';

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
#echo 'RunForte: '.gRunForte(26). ' <br> ';

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
#echo 'RunSuave: '.gRunSuave(26). '<br> ';

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
#echo 'RunFraco: '.gRunFraco(17). '<br> ';

//GELO
function gGelo($qtdGelo) {
	if ($qtdGelo == 20) {
		return 1;
	} else {
		return 0;
	}
}
#echo 'Gelo: '.gGelo(20). '<br>';

	
function paladarPepsi($qtdRefri, $qtdRun, $qtdGelo)
{
$pepsiSuave = max(min(gPepsiForte($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)),
min(gPepsiSuave($qtdRefri), gRunSuave($qtdRun), gGelo($qtdGelo)),
min(gPepsiFraca($qtdRefri), gRunForte($qtdRun), gGelo($qtdGelo)));

$pepsiForte = max(min(gPepsiForte($qtdRefri), gRunSuave($qtdRun), gGelo($qtdGelo)),
min(gPepsiForte($qtdRefri), gRunForte($qtdRun), gGelo($qtdGelo)),
min(gPepsiSuave($qtdRefri), gRunForte($qtdRun), gGelo($qtdGelo)));

$pepsiFraca = max(min(gPepsiFraca($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)),
min(gPepsiFraca($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)),
min(gPepsiSuave($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)));

echo '<br>Pepsi Suave: '.$pepsiSuave.' <br> Pepsi Forte: '.$pepsiForte.' <br>Pepsi Fraca: '.$pepsiFraca. '<br>';

if ($pepsiFraca > $pepsiForte and $pepsiFraca > $pepsiSuave) {
	return 'fraco';
}
elseif ($pepsiSuave > $pepsiFraca and $pepsiSuave > $pepsiForte) {
	return 'suave';
}
elseif ($pepsiForte > $pepsiSuave and $pepsiForte > $pepsiFraca){
	return 'forte';
}
elseif ($pepsiForte != 0 and $pepsiForte == $pepsiSuave){
	return  'suave';
}
elseif ($pepsiFraca != 0 and $pepsiFraca == $pepsiSuave){
	return 'suave';
}
}

function paladarCoca($qtdRefri, $qtdRun, $qtdGelo)
{
	$cocaSuave = max(min(gCocaForte($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)),
			min(gCocaSuave($qtdRefri), gRunSuave($qtdRun), gGelo($qtdGelo)),
			min(gCocaFraca($qtdRefri), gRunForte($qtdRun), gGelo($qtdGelo)));

	$cocaForte = max(min(gCocaForte($qtdRefri), gRunSuave($qtdRun), gGelo($qtdGelo)),
			min(gCocaForte($qtdRefri), gRunForte($qtdRun), gGelo($qtdGelo)),
			min(gCocaSuave($qtdRefri), gRunForte($qtdRun), gGelo($qtdGelo)));

	$cocaFraca = max(min(gCocaFraca($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)),
			min(gCocaFraca($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)),
			min(gCocaSuave($qtdRefri), gRunFraco($qtdRun), gGelo($qtdGelo)));

	echo 'Coca Suave: '.$cocaSuave.' <br> Coca Forte: '.$cocaForte.' <br>Coca Fraca: '.$cocaFraca. '<br>';

	if ($cocaFraca > $cocaForte and $cocaFraca > $cocaSuave) {
		return 'fraco';
	}
	elseif ($cocaSuave > $cocaFraca and $cocaSuave > $cocaForte) {
		return 'suave';
	}
	elseif ($cocaForte > $cocaSuave and $cocaForte > $cocaFraca){
		return 'forte';
	}
	elseif ($cocaForte != 0 and $cocaForte == $cocaSuave){
		return 'forte';
	}
	elseif ($cocaFraca != 0 and $cocaFraca == $cocaSuave){
		return 'suave';
	}
}


#paladarCoca($qtdPepsi, $qtdRun, $qtdGelo);
#paladarPepsi(63, 18, 20);
?>
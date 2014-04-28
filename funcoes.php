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

?>
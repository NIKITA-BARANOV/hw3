<?php


function operation($FIZZ, $BUZZ, $last){

	$file = fopen("myfile.txt", 'r');
	$FIZZ = fgets($file);
	$BUZZ = fgets($file);
	$last = fgets($file);

	for($i = 1; $i <= $last; $i++){

		if((($i % $FIZZ) == 0) && (($i % $BUZZ) == 0)){
			echo "","FB";
		}elseif(($i % $BUZZ) == 0){
			echo "","B";
		}elseif (($i % $FIZZ) == 0){
			echo "","F";
		}else{
			echo "", $i;
		}
	};


}

echo operation($FIZZ, $BUZZ, $last);

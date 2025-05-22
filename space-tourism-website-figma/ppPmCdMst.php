<?php
// №1

	$num1 = '1';
	$num2 = '2';
	
	if ($num1 + $num2 === '3') { //! either =='3', or === 3
		echo '+++';
	} else {
		echo '---';
	}

// №2

	$num = 123;
    //! $str = (string) $num;
	
	if ($num[0] === 1) { //! $str[0] === '1' or $str[0] == 1
		echo '+++';
	} else {
		echo '---';
	}

// №3

	$num = 123;
	
	//! if (( (string) $num[0] ) == 1)  or if (( (string) $num[0] ) === '1')
	if ((string) $num[0] === 1) { 
		echo '+++';
	} else {
		echo '---';
	}

// №4

	$num = 123;
	$str = (string) $num;
	
	if ($str[0] === 1) { //! $str[0] === '1' or $str[0] == 1
		echo '+++';
	} else {
		echo '---';
	}

// №5

	$num = 12;
	
	if (strlen($num) === 2) { //! if (strlen((string) $num) === 2) 
		echo '+++';
	} else {
		echo '---';
	}

// №6

	$num = 123;
	$str = (string) $num;
	
	if ($num[0] === '1') { //! if ($str[0] === '1')
		echo '+++';
	} else {
		echo '---';
	}

// №7

	$num = 12;
	$str = (int) $num; //! (string) $num;
	
	if (strlen($str) === 2) {
		echo '+++';
	} else {
		echo '---';
	}

// №8

	$num = 1;
	
	if ($num !== 1 or $num !== 2) {
		echo '+++';
	} else {
		echo '---'; // должно вывести это
    }

//! the 'or' logical operator returns 'true' when at least one of the claims is true, therefore, because 1 !== 2 = true, the result is '+++'. thus the 'and' operator must be used instead

// №9
	$var1 = '1';
	$var2 = '2';
	
	if ($var1 + 1 === $var2) {
		echo '+++'; // должно сработать это
	} else {
		echo '---';
	}

//! '+' operator in this case converts the '1' string into a number, thus the result of the addition is (int) 2 which is loosly equal to '2', but with strict comparison the type also matters, threfore 2 !== '2';

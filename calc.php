<?php

	$osum = $_POST['osum']; // Общая сумма 
	$psum = $_POST['psum']; // Первоначальный взнос
	$year = (integer)$_POST['year']; // Год
	$month = (integer)$_POST['month']; // месяц
	$ans = $_POST['ans']; // Согласен с условиями

	$loan_amount = $osum - $psum; // Сумма займа
	$to_month = $year*12 + $month; //Срок в месяцах
	$procent = $to_month < 24 ? 14 : $to_month < 36 ? 21 : 23; // Процентная ставка
	$main_debt = $loan_amount / $to_month; // Ежемесячный основной долг
	$overpayment = $main_debt * $procent / 100; //Переплата в месяц

	$monthly_payment = (integer)($main_debt + $overpayment); // Ежемесячный платеж
	$overpayment_for_all_time = (integer)($overpayment * $to_month); // Переплата за всё время;

	if (!isset($ans)){ // проверка  Согласен с условиями
		return 'поставите галочку \'Согласен с условиями\'';
	}
	
	if ($osum < 100000 || $osum > 100000000){ // ограничение на Общая сумма
		return 'ограничение на Общая сумма от 100 000 до 100 000 000';
	}

	$p15 = $osum * 15 / 100;
	if ($p15 > $psum){ // ограничение на Первоначальный взнос
		return 'ограничение на Первоначальный взнос от 15% суммы займа';
	}

	return "Ежемесячный платеж = {$monthly_payment} Переплата за всё время = {$overpayment_for_all_time} ";
?>
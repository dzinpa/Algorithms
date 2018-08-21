<html>
<body>

<h3>Калькулятор зарплаты</h3>
<form action="" method="GET">
	<input type="text" name="brutto"placeholder=" Брутто суммa"><br><br>
	<input type="text" name="discount" placeholder="Кол-во Иждивенцев"><br><br>
	<input type="submit" name="submit" value="Рассчитать">
	<h4>Результат расчетов:</h4>
</form>

<?php
/**
 *Calculation of salary
 */
if (isset($_GET['submit'])) {
	$brutto=($_GET['brutto']);
	$discount=($_GET['discount']);
		if ($discount>0){
			$discount==$discount;
		}else{
			$discount=0;
		}
		
		$sum1=$brutto-($brutto*0.11);
		$sum2=$sum1-($sum1*0.20);
		$sum3=$sum1-200*$discount;
		$sum4=($sum3-($sum3*0.20))+(200*$discount);
		
			if ($brutto <= 450 || $discount*200 > $sum1){
				echo 'Нетто сумма: '.$sum1. ' euro';
			} else if ($brutto > 450 && $discount <=0){
				echo 'Нетто сумма: '.$sum2. ' euro';
			} else {
				echo' Нетто сумма: ' .$sum4 . ' euro';
			}
}
?>

</body>
</html>
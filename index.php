<!DOCTYPE html>
<html>
	<head>
		<title>Лабораторная 12</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<div class="header">
			<h1>Лабораторная 12</h1>		
		</div>		
		
		
		<div class="Block1">
			<h4>Задание 1: </h4>
			<?php
 				$array1 = range(1, 100);
				 $sum = array_sum($array1);
				 echo "Сумма элементов массива: " . $sum;
			?>
			<br>

			<h4>Задание 2: </h4>
			<?php
				$array2 = array('a', 'b', 'c', 'd', 'e');
				$array2 = array_map('strtoupper', $array2);
				print_r($array2);
			?>
			<br>

			<h4>Задание 3: </h4>
			<?php
 				$arr = array(1, 2, 3, 4, 5);
				$count = count($arr);
				echo "Количество элементов массива: " . $count;
			?>
			<br>

			<h4>Задание 4: </h4>
			<?php
				$lastElement = $arr[count($arr) - 1];
				echo "Последний элемент массива: " . $lastElement;
			?>
			<br>

			<h4>Задание 5: </h4>
			<?php
				$array3 = array(1, 2, 3, 4, 5);
				if (in_array(3, $array3)) {
					echo "Массив содержит элемент со значением 3";
				} else {
					echo "Массив не содержит элемента со значением 3";
				}
			?>
			<br>

			<h4>Задание 6: </h4>
			<?php
				$array4 = array(1, 2, 3, 4, 5);
				$sum = array_sum($array4);
				echo "Сумма элементов массива: " . $sum;
			?>
			<br>

			<h4>Задание 7: </h4>
			<?php
				$product = array_product($array4);
				echo "Произведение элементов массива: " . $product;
			?>
			<br>

			<h4>Задание 8: </h4>
			<?php
				$average = array_sum($arr) / count($arr);
				echo "Среднее арифметическое элементов массива: " . $average;
			?>
			<br>

			<h4>Задание 9: </h4>
			<?php
				$array5 = range(1, 100);
				print_r($array5);
			?>
			<br>

			<h4>Задание 10: </h4>
			<?php
				$array6 = range('a', 'z');
				print_r($array6);
			?>
			<br>

			<h4>Задание 11: </h4>
			<?php
				$string11 = implode('-', range(1, 9));
				echo $string11;
			?>
			<br>

			<h4>Задание 12: </h4>
			<?php
				$sum12 = array_sum(range(1, 100));
				echo "Сумма чисел от 1 до 100: " . $sum12;
			?>
			<br>

			<h4>Задание 13: </h4>
			<?php
				$product13 = array_product(range(1, 10));
				echo "Произведение чисел от 1 до 10: " . $product13;
			?>
			<br>

			<h4>Задание 14: </h4>
			<?php
				$array14_1 = array(1, 2, 3);
				$array14_2 = array('a', 'b', 'c');
				$array14 = array_merge($array14_1, $array14_2);
				print_r($array14);
			?>
			<br>

			<h4>Задание 15: </h4>
			<?php
				$array15 = array(1, 2, 3, 4, 5);
				$result15 = array_slice($array15, 1, 3);
				print_r($result15);
			?>
			<br>

			<h4>Задание 16: </h4>
			<?php
				$array16 = array(1, 2, 3, 4, 5);
				array_splice($array16, 1, 2);
				print_r($array16);
			?>
			<br>

			<h4>Задание 17: </h4>
			<?php
				$array17 = array(1, 2, 3, 4, 5);
				$newArray17 = array_splice($array17, 1, 3);
				print_r($newArray17);
			?>
			<br>

			<h4>Задание 18: </h4>
			<?php
				$array18 = array(1, 2, 3, 4, 5);
				array_splice($array18, 3, 0, array('a', 'b', 'c'));
				print_r($array18);
			?>		
			<br>

			<h4>Задание 19: </h4>
			<?php
				$array19 = array(1, 2, 3, 4, 5);
				array_splice($array19, 1, 0, 'a');
				array_splice($array19, 2, 0, 'b');
				array_splice($array19, 6, 0, 'c');
				array_splice($array19, 8, 0, 'e');
				print_r($array19);
			?>
			<br>

			<h4>Задание 20: </h4>
			<?php
				$array20 = array('a' => 1, 'b' => 2, 'c' => 3);
				$keys = array_keys($array20);
				$values = array_values($array20);
				print_r($keys);
				print_r($values);
			?>
			<br>

			<h4>Задание 21: </h4>
			<?php
				$array21_1 = array('a', 'b', 'c');
				$array21_2 = array(1, 2, 3);
				$array21 = array_combine($array21_1, $array21_2);
				print_r($array21);
			?>
			<br>

			<h4>Задание 22: </h4>
			<?php
				$array22 = array('a' => 1, 'b' => 2, 'c' => 3);
				$array22 = array_flip($array22);
				print_r($array22);
			?>
			<br>

			<h4>Задание 23: </h4>
			<?php
				$array23 = array(1, 2, 3, 4, 5);
				$array23 = array_reverse($array23);
				print_r($array23);
			?>
			<br>

			<h4>Задание 24: </h4>
			<?php
				$array24 = array('a', '-', 'b', '-', 'c', '-', 'd');
				$position24 = array_search('-', $array24);
				echo "Позиция первого элемента '-': " . $position24;
			?>
			<br>

			<h4>Задание 25: </h4>
			<?php
				$array25 = array('a', '-', 'b', '-', 'c', '-', 'd');
				$position25 = array_search('-', $array25);
				array_splice($array25, $position25, 1);
				print_r($array25);
			?>
			<br>

			<h4>Задание 26: </h4>
			<?php
				$array26 = array('a', 'b', 'c', 'd', 'e');
				$array26[0] = '!';
				$array26[3] = '!!';
				print_r($array26);
			?>
			<br>

			<h4>Задание 27: </h4>
			<?php

				$array27 = array('3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b');

				// Сортировка по значениям в возрастающем порядке
				asort($array27);
				print_r($array27);

				// Сортировка по значениям в убывающем порядке
				arsort($array27);
				print_r($array27);

				// Сортировка по ключам в возрастающем порядке
				ksort($array27);
				print_r($array27);

				// Сортировка по ключам в убывающем порядке
				krsort($array27);
				print_r($array27);
			?>
			<br>

			<h4>Задание 28: </h4>
			<?php
				$array28 = array('a' => 1, 'b' => 2, 'c' => 3);
				$randomKey28 = array_rand($array28);
				echo "Случайный ключ: " . $randomKey28;
			?>
			<br>

			<h4>Задание 29: </h4>
			<?php
				$array29 = array('a' => 1, 'b' => 2, 'c' => 3);
				$randomValue29 = $array29[array_rand($array29)];
				echo "Случайный элемент: " . $randomValue29;
			?>
			<br>

			<h4>Задание 30: </h4>
			<?php
				$arr30 = array(1, 2, 3, 4, 5);
				shuffle($arr30);
				print_r($arr30);
			?>
			<br>

			<h4>Задание 31: </h4>
			<?php
				$arr31 = range(1, 25);
				shuffle($arr31);
				print_r($arr31);
			?>
			<br>

			<h4>Задание 32: </h4>
			<?php
				$arr32 = range('a', 'z');
				shuffle($arr32);
				print_r($arr32);
			?>
			<br>

			<h4>Задание 33: </h4>
			<?php
				$str33 = join('', array_rand(array_flip(range('a', 'z')), 6));
				echo $str33 . "\n";
			?>
			<br>

			<h4>Задание 34: </h4>
			<?php
				$array34 = array('a', 'b', 'c', 'b', 'a');
				$array34 = array_unique($array34);
				print_r($array34);
			?>
			<br>
			
			<h4>Задание 35: </h4>
			<?php
				$array35 = array(1, 2, 3, 4, 5);
				$firstElement35 = array_shift($array35);
				$lastElement35 = array_pop($array35);
				echo "Первый элемент: " . $firstElement35;
				echo "Последний элемент: " . $lastElement35;
				print_r($array35);
			?>
			<br>

			<h4>Задание 36: </h4>
			<?php
				$array36 = array(1, 2, 3, 4, 5);
				array_unshift($array36, 0);
				array_push($array36, 6);
				print_r($array36);				
			?>
			<br>

			<h4>Задание 37: </h4>
			<?php
				$array37 = array(1, 2, 3, 4, 5, 6, 7, 8);
				$result37 = '';
				while (!empty($array37)) {
				  $result37 .= array_shift($array37);
				  $result37 .= array_pop($array37);
				}
				echo $result37;
			?>
			<br>

			<h4>Задание 38: </h4>
			<?php
				$array38 = array('a', 'b', 'c');
				$array38 = array_merge($array38, array('-', '-', '-'));
				print_r($array38);
			?>
			<br>

			<h4>Задание 39: </h4>
			<?php
				$array39 = array_fill(0, 10, 'x');
				print_r($array39);
			?>
			<br>

			<h4>Задание 40: </h4>
			<?php
				$array40 = range(1, 20);
				$chunkedArray40 = array_chunk($array40, 4);
				print_r($chunkedArray40);
			?>
			<br>
		</div>

		<footer>
			<h1>Выполнено © Морошкином Максимом</h1>
		</footer>
	</body>
</html>	
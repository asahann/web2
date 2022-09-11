<?php
function print_author()
{
	echo "Група: СНс-41.<br>";
	echo "ПІП: Саган Олександр Анатолійович.<br>";
	echo "Дата створення: 2022/09/09.<br>";
	echo "Поточна дата: ".date("Y/m/d").".<br>";
}

function define_color($res)
{
	switch ($res):
		case 0:
		case 1: echo "Зелений."; break;
		case 2:
		case 3: echo "Червоний."; break;
		case 4:
		case 5: echo "Жовтий."; break;
		case 6:
		case 7: echo "Білий."; break;
		case 8:
		case 9: echo "Блакитний."; break;
		default: echo "Сталась помилка.";
	endswitch;
}

print_author();
if($_POST['year'] != ""):
		echo "Рік: ".$_POST['year']." - ";
		echo define_color(($_POST['year'] - 1984)%10)."<br>";
endif;

if($_POST['number'] != ""):
	
		echo "Номер року:".$_POST['number']." - ";
		echo define_color(($_POST['number'])%10-1)."<br>";
endif;
echo "<br><a href='index.html'>Повернутись.</a>";
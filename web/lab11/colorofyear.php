<?php
echo "Група: СНс-41.<br>";
echo "ПІП: Саган Олександр Анатолійович<br>";
echo "Дата створення: С09.09.2022<br>";
echo "Поточна дата".date("d.m.Y")."<br>";
$start = 1984;
$current = $_POST['year'];;
$res = ($current - $start)%10;
switch ($res) {
    case 0:
	case 1:
        echo "Зелений.";
        break;
	case 2:
    case 3:
        echo "Червоний.";
        break;
	case 4:
    case 5:
        echo "Жовтий.";
        break;
	case 6:
	case 7:
		echo "Білий.";
		break;
	case 8:
	case 9:
	echo "Блакитний.";
		break;
	default:
		echo "Сталась помилка.";
}
echo "<br><a href='index.html'>Повернутись.</a>";
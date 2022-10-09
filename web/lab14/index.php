<?php
function is_negative($num) {return $num < 0;}
function print_div($label, $data){echo "<div><p>$label $data</p></div>";}
function array_to_string($arr){$string = "[ "; for ($i = 0; $i < sizeof($arr); $i++): $string = $string.$arr[$i].", "; endfor; return trim($string, ", ")." ]";}
function print_author(){echo "Група: СНс-41.<br>"; echo "ПІП: Саган Олександр Анатолійович.<br>"; echo "Дата створення: 2022/10/09.<br>"; echo "Поточна дата: ".date("Y/m/d").".<br>"; echo "<img src='array.png'><br>";}
function matrix_to_array($matrix){$result = []; array_walk_recursive($matrix, function ($item, $key) use (&$result) {$result[] = $item;}); return $result;}
function array_column_product($index1, $index2, $matrix){return round(array_product(array_merge(array_column($matrix, $index1), array_column($matrix, $index2))), 2);}
function matrix_to_string($matrix){$string = ""; foreach ($matrix as $row_num => $row) {$string = $string . array_to_string($row);} return $string;}
print_author();
$D =[[0.2, -7.1, -3.5, 4.1], [2.4, -1.7, 3.1, 2.2], [-8.3, 4.1, 2.2, -1.7]];
print_div("Matrix D: ", matrix_to_string($D));
#1)Product of columns 1 and 3
print_div("Product of columns 1 and 3: ", $column_product = array_column_product(0, 2, $D));
#2)Product > 0 log10(Sum) : Pow(Sum, 1/3)
print_div("Result: ", $result = round($column_product > 0 ? log10($column_product) : pow($column_product, 1/3), 2));
#3)New matrix: D + Result
$new_matrix = $D;
array_walk($new_matrix, function( &$row, $row_num) use ($result){array_walk($row, function(&$elem, $elem_num) use ($result){$elem = $elem + $result;});});
print_div("New matrix (D + Result): ", matrix_to_string($new_matrix));
#4)Sum of negative elems of new matrix
print_div("Sum of negative elems of new matrix: ", array_sum(array_filter(matrix_to_array($new_matrix),'is_negative')));
#5)Coords of negative elems of new matrix
echo "Coords of negative nums:<br>";
array_walk($new_matrix, function( &$row, $row_num){array_walk($row, function(&$elem, $index) use ($row_num){if(is_negative($elem)): echo "($row_num;$index)<br>"; endif;});});
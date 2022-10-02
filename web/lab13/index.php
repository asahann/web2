<?php
function num_plus($num) {return $num > 0;}
function num_minus($num) {return $num < 0;}
function array_multiply($arr, $n){foreach ($arr as &$val) {$val = $val * $n;} return $arr;}
function from_10_to_20_filter($num) {return $num > 10 and $num < 20;}
function print_div($label, $data){echo "<div><p>$label $data</p></div>";}
function array_to_string($arr){$string = "[ "; for ($i = 0; $i < sizeof($arr); $i++): $string = $string.$arr[$i].", "; endfor; return $string." ]";}
$A = [-9, 7, 8, 0, -1, 6, -4, 5, 0, 5];
print_div("Data variant: ", array_to_string($A));
#1)Product of minus elems
$minus_elems_product = array_product(array_filter($A, 'num_minus'));
#2)Sum of plus elems
$plus_elems_sum = array_sum(array_filter($A, 'num_plus'));
print_div("Product of minus nums:", $minus_elems_product);
print_div("Sum of plus nums: ", $plus_elems_sum);
#3)Sum < Product ? log10(Sum) : Pow(Sum, 1/3)
print_div("Result: ", $result = round($plus_elems_sum < $minus_elems_product ? log10($plus_elems_sum) : pow($plus_elems_sum, 1/3), 2));
#4)New array
$new_array = array_multiply($A, $result);
print_div("Multiply A and Result: ", array_to_string($new_array));
#5)Number of 10 > num < 20
print_div("Number of 10 > nums < 20: ", count( array_filter($new_array, 'from_10_to_20_filter') ) );
#6)Index of 10 > num < 20
foreach ($new_array as $key => $value) {if(!from_10_to_20_filter($value)): unset($new_array[$key]); endif;}
print_div("Coords of 10 > nums < 20: ", array_to_string(array_keys($new_array)));
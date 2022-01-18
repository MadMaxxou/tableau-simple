<?php
$array =[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41];
shuffle($array);
$array2 =  array_slice($array,0,15);
$array3 = $array2;
$array4 = array_merge($array2,$array3);
shuffle($array4);
print_r($array4);
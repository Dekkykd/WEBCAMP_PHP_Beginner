<?php

$i = 2;
$s = match($i) {
    '2a' => "i は '2a'です \n",
    '2' => "i は '2'(string)です \n",
    2 => "i は 2(int)です \n",
};
//
echo $s;

//switchが「文」であるのに対して、matchが「式」であること
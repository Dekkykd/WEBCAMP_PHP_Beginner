<?php

//
echo "論理演算子の確認\n";
var_dump( true && false );
var_dump( true || false );
// && は、「条件Aが満たされる、かつ、条件Bも満たされる（どっちも満たされる必要がある）」演算子です（ 論理積 ）。
// ||  は、「条件Aが満たされる、または、条件Bも満たされる（どちらか一方が満たされればよい）」演算子です（ 論理和 ）。

// ユーザの情報
$age = 20;
$point = 499;

//
echo "\n";
echo "「かつ」の場合\n";
var_dump( ($age >= 20) && ($point >= 500) );

echo "\n";
echo "「または」の場合\n";
var_dump( ($age >= 20) || ($point >= 500) );
<?php
include_once 'src/nahid940/NumberToWords.php';

$n=new \nahid\NumberToWords\NumberToWords();

var_dump($n->convertToWords(12346543,'Taka'));
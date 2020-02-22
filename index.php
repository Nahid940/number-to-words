<?php
include_once 'src/nahid940/NumberToWords.php';

$n=new \nahid940\NumberToWords();

var_dump($n->convertToWords(12346543,'Taka'));
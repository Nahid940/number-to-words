<?php
/**
 * Created by PhpStorm.
 * User: nahid940
 * Date: 2/22/20
 * Time: 10:49 AM
 */

namespace NumberToWords;


class NumberToWords
{

    public function __construct()
    {

    }

    /**
        @param $value which is the number value that you want to convert
        @param $currency which is the value for Taka, Rupees etc.
     **/

    public function convertToWords($value,$currency)
    {
        $number = $value;
        $no = floor($number);
        $point = round($number - $no, 2) * 100;
        $hundred = null;
        $digits_1 = strlen($no);
        $i = 0;
        $word_str = array();
        $number_words = array('0' => '', '1' => 'one', '2' => 'two',
            '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
            '7' => 'seven', '8' => 'eight', '9' => 'nine',
            '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
            '13' => 'thirteen', '14' => 'fourteen',
            '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
            '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
            '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
            '60' => 'sixty', '70' => 'seventy',
            '80' => 'eighty', '90' => 'ninety');
        $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
        while ($i < $digits_1) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += ($divider == 10) ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($word_str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $word_str[0]) ? ' and ' : null;
                $word_str [] = ($number < 21) ? $number_words[$number] .
                    " " . $digits[$counter] . $plural . " " . $hundred
                    :
                    $number_words[floor($number / 10) * 10]
                    . " " . $number_words[$number % 10] . " "
                    . $digits[$counter] . $plural . " " . $hundred;
            } else $word_str[] = null;
        }
        $word_str = array_reverse($word_str);
        $result = implode('', $word_str);
        $points = ($point) ?
            "." . $number_words[$point / 10] . " " .
            $number_words[$point = $point % 10] : '';
       return $result  . $points . $currency;
    }

}
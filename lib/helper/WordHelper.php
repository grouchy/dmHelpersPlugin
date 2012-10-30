<?php

if (!function_exists('cut_synopsis')) {
    /**
     * Cut the text from begining to the desired number of words.
     * 
     * @param string $string - String to format.
     * @param integer $words_returned - Number of words to cut.
     * @return string - Per example, cut_synopsis($obj->getText(), 20) returns first 20 words from desired text.
     */

    function cut_synopsis($string, $words_returned) {
        $ret_val = $string;
        $array = explode(" ", $string);

        if (count($array) <= $words_returned) {
            $ret_val = $string;
        }
        else {
            array_splice($array, $words_returned);
            $ret_val = implode(" ", $array) . "...";
        }

        return $ret_val;
    }
}
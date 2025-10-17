<?php

namespace lib\core;

function formatter_startsWith($val, $str) {
    return strpos(strval($val), strval($str)) === 0;
}

function formatter_endsWith($val, $str) {
    $str = strval($str);
    return substr(strval($val), -strlen($str)) == $str;
}

function formatter_contains($val, $str) {
    if (is_array($val)) return in_array($str, $val);
    return strpos(strval($val), strval($str)) !== FALSE;
}

function formatter_between($val, $a, $b) {
    return $a <= $val && $val <= $b;
}

function formatter_inRange($val, $min, $max) {
    return $val >= $min && $val <= $max;
}

function formatter_inArray($val, $arr) {
    if (!is_array($arr)) return FALSE;
    return in_array($val, $arr);
}
<?php

$fo = @fopen("cv.txt", "r");
$msg = "";
$search = $_POST['search'];
if ($fo) {
    while (($buffer = fgets($fo)) !== false) {
        $pos = mb_stripos($buffer, $search);
        if ($pos > 0) {
            //preg_match('/([\x7F-\xFF])+/s', $buffer, $matches);
            //print_r($matches);
            //$msg = preg_replace('/('.$search.')/i', '<i class="yellow">$1</i>', $buffer);
            $len = mb_strlen($search);
            $msg = mb_substr_replace($buffer, '</i>', $pos+$len, 0);
            $msg = mb_substr_replace($msg, '<i class="yellow">', $pos, 0);
            break;
        }
    }
    fclose($fo);
}

if ($msg == "") { $msg = "Не найдено";}
echo $msg;

/*function mb_substr_replace($string, $replacement, $start, $length=NULL) {
    if (is_array($string)) {
        $num = count($string);
        // $replacement
        $replacement = is_array($replacement) ? array_slice($replacement, 0, $num) : array_pad(array($replacement), $num, $replacement);
        // $start
        if (is_array($start)) {
            $start = array_slice($start, 0, $num);
            foreach ($start as $key => $value)
                $start[$key] = is_int($value) ? $value : 0;
        }
        else {
            $start = array_pad(array($start), $num, $start);
        }
        // $length
        if (!isset($length)) {
            $length = array_fill(0, $num, 0);
        }
        elseif (is_array($length)) {
            $length = array_slice($length, 0, $num);
            foreach ($length as $key => $value)
                $length[$key] = isset($value) ? (is_int($value) ? $value : $num) : 0;
        }
        else {
            $length = array_pad(array($length), $num, $length);
        }
        // Recursive call
        return array_map(__FUNCTION__, $string, $replacement, $start, $length);
    }
    preg_match_all('/./us', (string)$string, $smatches);
    preg_match_all('/./us', (string)$replacement, $rmatches);
    if ($length === NULL) $length = mb_strlen($string);
    array_splice($smatches[0], $start, $length, $rmatches[0]);
    return join($smatches[0]);
}*/

function mb_substr_replace($string, $replacement, $start, $length)
{
    preg_match_all('/./us', (string)$string, $smatches);
    array_splice($smatches[0], $start, $length, $replacement);
    return join($smatches[0]);
}
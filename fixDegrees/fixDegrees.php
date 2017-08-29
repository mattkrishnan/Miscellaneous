<?php
$find = array();
$replace = array();
 
$line = $modx->getChunk('replaceDegrees');
$pairs = array_map('trim', explode(',', $line));
foreach($pairs as $pair) {
    if (strpos($pair, ':') === false) {
        $pair = $pair . ':';
    }
    $couple = array_map('trim', explode(':', $pair));
    $find[] = $couple[0];
    $replace[] = $couple[1];
}
return = str_replace($find, $replace , $input);
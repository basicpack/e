<?php
//Criado por Anderson Ismael
//31 de janeiro de 2019
function e(string $text, bool $trim=true){
    if ($trim) {
        $text = preg_replace("/[\r\n]+/", " ", $text);
        $text = preg_replace("/\s+/", ' ', $text);
        $text = preg_replace("/\t+/", ' ', $text);
        $text = trim($text);
        $text = htmlentities($text);
    } else {
        $text = htmlentities($text);
    }
    return $text;
}

<?php
/**
 * Генератор текста на цепях Маркова
 */
header('Content-Type: text/html; charset=utf-8'); 

require_once("class_markov.php");

$data = file_get_contents("text.txt");

$mk = new \Generator\Markov($data,5);
$text = "<p>".$mk->get_result();

$mk = new \Generator\Markov($data,5);
$text .= "</p><p>".$mk->get_result();

$mk = new \Generator\Markov($data,5);
$text .= "</p><p>".$mk->get_result();

echo "<p style='word-wrap: break-word;'>".$text."</p>";
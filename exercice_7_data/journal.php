<?php

$file = fopen('journal.txt', 'a');
$journal = 'Votre adresse IP est : ' . $_SERVER['REMOTE_ADDR'] . "\n" .'Nous sommes le : ' . date('Y, F, l') . "\n\n";
fwrite($file, $journal);
fclose($file);

$read = file_get_contents('journal.txt');
echo $read;

?>
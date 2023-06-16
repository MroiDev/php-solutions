<?php

// Setting
$fileName = 'test.json';
$fileStart = "{\n\"data\": [\n";
$fileEnd = "\n]\n}";

for ($i = 1; $i <= 100000; $i++) {
	$fileStart .= "{\"p\": {$i}, \"n\": \"fakenickname{$i}\", \"t\":{$i}, \"e\": {$i}},\n";
}

$fileStart = substr($fileStart, 0, -2);
$fileStart .= $fileEnd;

file_put_contents($fileName, $fileStart);

?>
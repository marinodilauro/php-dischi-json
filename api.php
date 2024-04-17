<?php

// Read the JSON file
$json_string = file_get_contents('dischi.json');

// Turn JSON filen into an array
$disksArray = json_decode($json_string, true);

header('Content-type: application/json');

echo $json_string;

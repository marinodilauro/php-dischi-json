<?php

// Read the JSON file
$json_string = file_get_contents('dischi.json');

header('Content-type: application/json');

echo $json_string;

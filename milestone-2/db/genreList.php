<?php

$genre = ['Rock', 'Pop', 'Jazz', 'Metal'];


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($genre);

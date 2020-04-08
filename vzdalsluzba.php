<?php

header("Content-Type: application/json");



$data = array();

$data["jmeno"] = "Libor";

$data["prijmeni"] = "Svejda";

$data["roknar"] = 2000;

echo json_encode($data);
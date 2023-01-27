<?php

$data = [];
$loisirs = [];

if(isset($_POST["nom"])) {
    $data["nom"] = $_POST["nom"];
}

if(isset($_POST["prenom"])) {
    $data["prenom"] = $_POST["prenom"];
}

if(isset($_POST["email"])) {
    $data["email"] = $_POST["email"];
}

if(isset($_POST["telephone"])) {
    $data["telephone"] = $_POST["telephone"];
}

if(isset($_POST["linkedin"])) {
    $data["linkedin"] = $_POST["linkedin"];
}

if(isset($_POST["github"])) {
    $data["github"] = $_POST["github"];
}

if(isset($_POST["biographie"])) {
    $data["biographie"] = $_POST["biographie"];
}



if(isset($_POST["loisir-1"])) {
    $loisirs["loisir-1"] = $_POST["loisir-1"];
}

if(isset($_POST["loisir-2"])) {
    $loisirs["loisir-2"] = $_POST["loisir-2"];
}

if(isset($_POST["loisir-3"])) {
    $loisirs["loisir-3"] = $_POST["loisir-3"];
}

if(isset($_POST["loisir-4"])) {
    $loisirs["loisir-4"] = $_POST["loisir-4"];
}

$data["loisirs"] = $loisirs;


if(isset($_POST["language"]) && $_POST["language"] !== "") {
    $data["language"] = $_POST["language"];
}

if(isset($_POST["lang"]) && $_POST["lang"] !== "") {
    $data["lang"] = $_POST["lang"];
}

if(isset($_POST["frameworks"]) && $_POST["frameworks"] !== "") {
    $data["frameworks"] = $_POST["frameworks"];
}

if(isset($_POST["software"]) && $_POST["software"] !== "") {
    $data["software"] = $_POST["software"];
}

if(isset($_POST["software"]) && $_POST["software"] !== "") {
    $data["software"] = $_POST["software"];
}


if(isset($_POST["color"]) && $_POST["color"] !== "")  {
    $data["color"] = $_POST["color"];
}


?>
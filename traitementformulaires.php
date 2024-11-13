<?php 

$arraychampserreurs = 
[
    "nom" => 
    [
        "required" => true,
        "minlength" => 2,
        "maxlength"=> 255,
    ],
    "prenom" =>
    [
        "required" => false,
        "minlength" => 2,
        "maxlength" => 255,
    ], 
    "email" => 
    [
        "required" => true,
        "type_verification" => email, 
    ],
    "message"=>
    [
        "required" => true,
        "minlength" => 10,
        "maxlength" => 3000,
    ],
    "pseudo"=>
    [
        "required" =>true,
        "minlenght" => 2,
        "maxlenght"=>255, 
    ],
    "motdepasse"=>
    [
        "required" =>true,
        "minlenght"=> 8,
        "maxlenght" => 72,
    ]
]

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
}
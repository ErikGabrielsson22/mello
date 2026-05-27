<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$mello_data = [
    "deltavlingar" => [
        ["id" => 1, "namn" => "Deltävling 1 - Malmö"],
        ["id" => 2, "namn" => "Deltävling 2 - Göteborg"]
    ],

    "bidrag" => [
        // Deltävling 1 bidrag, och kopplar info till varje bidrag
        ["deltavling_id" => 1, "artist" => "Hasse Andersson", "titel" => "Guld och gröna skogar", "bild" => "bilder/hasse.jpg"],
        ["deltavling_id" => 1, "artist" => "Loreen", "titel" => "Tattoo", "bild" => "bilder/loreen.jpg"],
        ["deltavling_id" => 1, "artist" => "Danny Saucedo", "titel" => "Amazing", "bild" => "bilder/danny.jpg"],
        ["deltavling_id" => 1, "artist" => "Fröken Snusk", "titel" => "Unga & Fria", "bild" => "bilder/fröken.jpg"],
        ["deltavling_id" => 1, "artist" => "Måns Zelmerlöw", "titel" => "Heroes", "bild" => "bilder/måns.jpg"],
        ["deltavling_id" => 1, "artist" => "Medina", "titel" => "In i dimman", "bild" => "bilder/medina.jpg"],
        ["deltavling_id" => 1, "artist" => "Smash Into Pieces", "titel" => "Heroes Are Calling", "bild" => "bilder/smash.jpg"],
        ["deltavling_id" => 1, "artist" => "Marcus & Martinus", "titel" => "Unforgettable", "bild" => "bilder/marcus.jpg"],

        // Deltävling 2 bidrag, och kopplar info till varje bidrag
        ["deltavling_id" => 2, "artist" => "Liamoo", "titel" => "Dragon", "bild" => "bilder/liamoo.jpg"],
        ["deltavling_id" => 2, "artist" => "Alvaro Estrella", "titel" => "Baila baila", "bild" => "bilder/alvaro.jpg"],
        ["deltavling_id" => 2, "artist" => "Dotter", "titel" => "Bulletproof", "bild" => "bilder/dotter.jpg"],
        ["deltavling_id" => 2, "artist" => "Copacabana Boy", "titel" => "Copacabana", "bild" => "bilder/copacabana.jpg"]
    ]
];

echo json_encode($mello_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
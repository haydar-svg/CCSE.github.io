<?php

function dbConnect()
{
    try {
        $db = new PDO("mysql:host=localhost;dbname=CCSE", 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

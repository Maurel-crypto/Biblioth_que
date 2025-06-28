<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "gestion_bibliothèqueWc jJ"); // Change "nom_de_ta_base"

if ($conn->connect_error) {
    echo json_encode(["error" => "Connexion échouée"]);
    exit;
}

$data = [];

// Étudiants aujourd'hui
$res = $conn->query("SELECT COUNT(*) AS total FROM entrees WHERE DATE(date_entree) = CURDATE()");
$data['etudiants'] = $res->fetch_assoc()['total'] ?? 0;

// Livres en stock
$res = $conn->query("SELECT COUNT(*) AS total FROM livres WHERE statut = 'disponible'");
$data['livres'] = $res->fetch_assoc()['total'] ?? 0;

// Demandes de livres
$res = $conn->query("SELECT COUNT(*) AS total FROM demandes WHERE statut = 'en_attente'");
$data['demandes'] = $res->fetch_assoc()['total'] ?? 0;

// Livres réservés
$res = $conn->query("SELECT COUNT(*) AS total FROM reservations WHERE statut = 'en_cours'");
$data['reserves'] = $res->fetch_assoc()['total'] ?? 0;

echo json_encode($data);
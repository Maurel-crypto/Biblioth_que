<?php
header('Content-Type: application/json');

// Connexion à MySQL (modifie les infos de connexion)
$host = "localhost";
$dbname = "gestion_bibliothèque";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

// Lire les livres
$query = $conn->query("SELECT nom_livre, cat_livre, sect_livre, edition_livre, auteur_livre, qte_livre FROM livre");
$books = $query->fetchAll(PDO::FETCH_ASSOC);

// Retourner les données au format JSON
echo json_encode($books);
?>
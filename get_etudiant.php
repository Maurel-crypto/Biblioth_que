<?php
if (isset($_GET['mat_etu'])) {
    $matricule = $_GET['mat_etu'];

    // Connexion à ta base de données
    $conn = new mysqli("localhost", "root", "", "gestion_bibliothèque");

    if ($conn->connect_error) {
        die("Erreur : " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT nom_etu, pre_etu FROM etudiant WHERE mat_etu = ?");
    $stmt->bind_param("s", $matricule);
    $stmt->execute();
    $result = $stmt->get_result();
    $etudiant = $result->fetch_assoc();

    echo json_encode($etudiant ?: []);
}
?>
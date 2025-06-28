<?php
if (isset($_POST['btn'])) {
    $db = new PDO("mysql:host=localhost;dbname=gestion_bibliothèque", "root", "");

    // Étape 1 : Insérer ou ignorer l’étudiant
    $checkEtu = $db->prepare("SELECT * FROM etudiants WHERE mat_etu = ?");
    $checkEtu->execute([$_POST['matricule']]);

    if ($checkEtu->rowCount() == 0) {
        $insertEtu = $db->prepare("INSERT INTO etudiants(mat_etu, nom_etu) VALUES (?, ?)");
        $insertEtu->execute([$_POST['matricule'], $_POST['nom']]);
    }

    // Étape 2 : Insérer ou ignorer le livre
    $checkLivre = $db->prepare("SELECT num_livre FROM livre WHERE nom_livre = ? AND auteur_livre = ? AND edition_livre = ?");
    $checkLivre->execute([$_POST['titre'], $_POST['auteur'], $_POST['edition']]);

    if ($checkLivre->rowCount() > 0) {
        $livre = $checkLivre->fetch();
        $num_livre = $livre['num_livre'];
    } else {
        $insertLivre = $db->prepare("INSERT INTO livre(nom_livre, auteur_livre, edition_livre) VALUES (?, ?, ?)");
        $insertLivre->execute([$_POST['titre'], $_POST['auteur'], $_POST['edition']]);
        $num_livre = $db->lastInsertId();
    }

    // Étape 3 : Insérer la réservation
    $insertReserv = $db->prepare("INSERT INTO reservation(date_jour, mat_etu, num_livre) VALUES (?, ?, ?)");
    $insertReserv->execute([$_POST['date'], $_POST['matricule'], $num_livre]);

    echo "Réservation enregistrée avec succès !";
}
?>
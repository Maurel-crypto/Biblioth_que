<?php
    if(isset($_POST["btn"])){
        $db = new PDO("mysql:host=localhost;dbname=gestion_bibliothèque","root","");
        $req=$db->prepare("INSERT INTO livre(nom_livre, cat_livre, sect_livre, edition_livre, auteur_livre, qte_livre,num_rayon) values(?,?,?,?,?,?,?)");
        $req->execute(array($_POST["titre"],$_POST["categorie"],$_POST["section"],$_POST["edition"],$_POST["auteur"],$_POST["quantité"],$_POST["rayon"]));
        header("location:site.php");
    }
?>
<?php
    if(isset($_POST['btn'])){
        $db = new PDO ("mysql:host=localhost;dbname=gestion_bibliothèque","root","");
        $req=$db->prepare("INSERT INTO historique(coul_sac,h_arriv,mat_etu) VALUES(?,?,?)");
        $dateDuJour = date("Y-m-d");
        $req-> execute(array($_POST["couleur"],$_POST["heure"],$_POST["matricule"]));
        header("location:Entrer.php");
    }
?>
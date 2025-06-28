<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: white;
      display: flex;
      justify-content: space-between;
      padding: 10px 30px;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    header img {
      height: 60px;
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: #025626;
      font-weight: bold;
    }
    nav a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 900px;
      margin: 30px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #00a651;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .form-group input[readonly] {
      background-color: #f0f0f0;
    }
    .main {
      max-width: 1000px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    .main h2 {
      text-align: center;
      color: #025626;
    }
    .main table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .main th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
    }
    .main th {
      background-color: #025626;
      color: white;
    }
    .buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .buttons button {
      padding: 12px 25px;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      color: white;
      transition: background 0.3s;
    }

    .btn-valider {
      background-color: #00a651;
    }

    .btn-valider:hover {
      background-color: #008f44;
    }

    .btn-livre {
      background-color: #0077cc;
    }

    .btn-livre:hover {
      background-color: #005fa3;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #eaeaea;
      margin-top: 40px;
    }

  </style>
</head>
<body>
<header>
    <img src="logo-uac.png" alt="Logo UAC">
    <nav>
      <a href="dashboard.html">Tableau de bord</a>
      <a href="Entrer.php">Entrées</a>
      <a href="Ajout_livre.php">Livres</a>
      <a href="Hist.php">Historiques</a>
      <a href="Accueil.html">déconnexion</a>
      <span id="clock"></span>
    </nav>
  </header>

<?php   
    $db=new PDO ("mysql:host=localhost;dbname=gestion_bibliothèque","root","");
    $req=$db->query("SELECT* FROM historique");
    echo "<div><h2>Historique des entées des étudiants</h2></div><table border ='1' cellpadding=0 cellspacing=0 class='main'>
    <tr>
    <th>Matricule</th>
    <th>Couleur de sac</th>
    <th>Heure d'arrivée</th>
    <th>Modifier</th>
    <th>Supprimer</th>
    </tr>";
    foreach($req as $cle=>$valeur){
        echo "
    <tr>
    <td>".$valeur["mat_etu"]."</td>
    <td>".$valeur["coul_sac"]."</td>
    <td>".$valeur["h_arriv"]."</td>
    <td><a href='modifier.php?id=".$valeur["num_hist"]."'>Modifier</a></td>
    <td><a href='supprime.php?id=".$valeur["num_hist"]."'>supprimer</a></td>
    </tr>";
}
 echo "</table>";

?>
</body>
</html>

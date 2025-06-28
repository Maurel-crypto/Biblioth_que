<!DOCTYPE html>
<html lang="fr">
<head>
<?php
// Heure actuelle du serveur au format HH:MM
date_default_timezone_set("Africa/Lagos"); // ou "Africa/Abidjan" ou autre selon ton pays
$heureActuelle = date("H:i");
function genererNumeroTicket() {
  $chiffres = str_pad(random_int(0, 99999), 5, '0', STR_PAD_LEFT);
  return 'T' . $chiffres;
}

$numero_ticket = genererNumeroTicket();
?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bibliothèque FADESP - UAC</title>
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
<body onload="setAutoTime()">

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

<div class="container">
  <h2>Formulaire d'Entrée Étudiant</h2>
  <form id="library-form" action="codeajoutetudiant.php" method="POST">
    <div class="form-group">
      <label for="matricule">Matricule</label>
      <input name="matricule" type="text" id="matricule" onkeyup="getEtudiant()" autocomplete="off" required />
    </div>
    <div class="form-group">
      <label for="nom">Nom</label>
      <input name="nom" type="text" id="nom" required readonly />
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input name="prenom" type="text" id="prenom" required  readonly/>
    </div>
    <div class="form-group">
      <label for="sac">Couleur du sac</label>
      <input name="couleur" type="text" id="sac" required />
    </div>
    <div class="form-group">
      <label for="arrivée">Heure d'arrivée :</label>
      <input type="time" name="heure" value="<?php echo $heureActuelle; ?>">
      </div>
    <div class="form-group">
      <label for="ticket">Numéro de ticket</label>
      <input type="text" id="ticket" name="ticket" value="<?= $numero_ticket ?>" readonly>
    </div>
    <div class="buttons">
      <button name="btn" type="submit" class="btn-valider">VALIDER</button>
    </div>
  </form>
</div>

<footer>
  &copy; 2025 Université d'Abomey-Calavi - FADESP | Développé par HAPPY-TECH
</footer>
<script>
function getEtudiant() {
  const matricule = document.getElementById("matricule").value;

  if (matricule.length < 3) return; // attendre quelques caractères

  const xhr = new XMLHttpRequest();
  xhr.open("GET", "get_etudiant.php?mat_etu=" + encodeURIComponent(matricule), true);
  xhr.onload = function () {
    if (xhr.status === 200) {
      const data = JSON.parse(xhr.responseText);
      document.getElementById("nom").value = data.nom_etu || '';
      document.getElementById("prenom").value = data.pre_etu || '';
    }
  };
  xhr.send();
}
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Ajout / Mise à jour d’un livre</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      margin: 0;
      background: #f5f9ff url('background.jpg') repeat;
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
    main {
      max-width: 700px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    h2 {
      color: #025626;
      text-align: center;
    }
    label {
      font-weight: bold;
      margin-top: 15px;
      display: block;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #025626;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #038a3f;
    }
    #clock {
      color: #025626;
      font-weight: bold;
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

  <main>
    <h2>Ajouter ou mettre à jour un livre</h2>
    <form action="codeAjoutlivre.php" method="POST">
    <label>Numéro du livre :</label>
    <input type="text" name="numero" required>
      <label>Titre du livre :</label>
      <input type="text" name="titre" required>
      <label>Catégorie :</label>
      <select name="categorie">
        <option>Droit de la famille</option>
        <option>Droit constitutionelle</option>
      </select>
      <label>Section :</label>
      <select name="section">
        <option>Libre</option>
        <option>Réservé</option>
      </select>
      <label>Édition :</label>
      <input type="text" name="edition" required>
      <label>Auteur :</label>
      <input type="text" name="auteur" required>
      <label>Quantité :</label>
      <input type="text" name="quantité" required>
      <label>Rayon :</label>
      <select name="rayon">
        <option>Rayon 1</option>
        <option>Rayon 2</option>
      </select>
      <button type="submit" name="btn">Enregistrer</button>
    </form>

  </script>
</body>
</html>

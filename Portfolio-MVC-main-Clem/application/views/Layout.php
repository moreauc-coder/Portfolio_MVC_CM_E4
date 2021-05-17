<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css">
    <title>Portfolio MVC</title>
</head>
<body>

<!-- NAV -->
<nav class="navigation navbar navbar-expand-sm bg-dark navbar-dark">

<div class="Navig">
<!-- Links -->
    <ul class="toto navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/projet/Portfolio-MVC-main-Clem/">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='/projet/Portfolio-MVC-main-Clem/index.php/C_Global/Apropos'>A propos</a>
      </li>
    </ul>
</div>

  <!-- Navbar text-->
  <form class="BoutonConnection" action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/getIdentifiant" method='post'>
    <textarea name="Identifiant" id="champs5" placeholder="Identifiant" class="NavBTextArea champs-long champs-textarea" rows="1"></textarea>
    <input name="MotDePasse"  type="password" id="champs5" placeholder="Mot de passe" class="NavBTextArea champs-long champs-textarea" rows="1"></input>
    <button type="submit" class="Bouton_Connection btn" >Connection</button>
    
</form>

</nav>
<!-- /NAV -->
</body>
</html>



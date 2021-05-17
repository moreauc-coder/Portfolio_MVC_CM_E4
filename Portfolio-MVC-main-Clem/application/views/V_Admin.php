<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="../../css/style.css" type="text/css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->

	<title>A propos</title>

</head>
<body>
	<div class="Ajouter">
		<form action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/ajout_Competences" method="post">

			<ul class="formexo">
				<label>Nouvelle compétence:</label>
				<textarea name="Competences" id="champs5" class="Ajout champs-long champs-textarea" rows="1"></textarea>
				<select name='Liste_niveau'>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<input value="Envoyer" type="submit">

			</ul>
		</form>

		<form action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/ajout_Experiences" method="post">
			<ul class="formexo">
				<label>Nouvelle Experience:</label>
				<textarea name="Experiences" id="champs5" class="Ajout champs-long champs-textarea" rows="1"></textarea>
				<select name='Liste_niveau'>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<input value="Envoyer" type="submit">

			</ul>
		</form>
		<form action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/ajout_Formations" method="post">
			<ul class="formexo">
				<label>Nouvelle Formation:</label>
				<textarea name="Formations" id="champs5" class="Ajout champs-long champs-textarea" rows="1"></textarea>
				<select name='Liste_niveau'>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<input value="Envoyer" type="submit">

			</ul>
		</form>
	</div>



	<div class="Supprimer">
		<form action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/suppr_Competences"
			method="post">
			<?php

            //generation visuel supprimer Compétence
            echo "<div class='Suppr'> Supprimer une compétence:
                    <select name='liste_C'>";
            for ($i = 1; $i <= $nb_Competences; $i++) {
                $current_Competences = $Competences["Competences$i"];
        echo " 
        <option  value='$current_Competences->id_Competences'>$current_Competences->Competences - $current_Competences->id_Competences</option>";

            }
            echo "</select></div>";
        ?>
			<input value="Supprimer" type="submit">

		</form>



		<form action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/suppr_Exp" method="post">
			<?php
            //generation visuel supprimer Experience
            echo "<div class='Suppr'> Supprimer une Experience:
                    <select name='liste_E'>";
            for ($i = 1; $i <= $nb_Experiences; $i++) {
                $current_Experiences = $Experiences["Experiences$i"];
        echo " 
        <option value='$current_Experiences->id_exp'>$current_Experiences->Experiences - $current_Experiences->id_exp</option>";

            }
            echo "</select></div>";
        ?>
			<input value="Supprimer" type="submit">

		</form>

		<form action="/projet/Portfolio-MVC-main-Clem/index.php/C_Global/suppr_Formations"
			method="post">
			<?php
            //generation visuel supprimer Experience
            echo "<div class='Suppr'> Supprimer une Formation:
                    <select name='liste_F'>";
            for ($i = 1; $i <= $nb_Formations; $i++) {
                $current_Formations = $Formations["Formations$i"];
        echo " 
        <option value='$current_Formations->id_formations'>$current_Formations->Formations - $current_Formations->id_formations</option>";

            }
            echo "</select></div>";
        ?>
			<input value="Supprimer" type="submit">

		</form>
	</div>

    </body>

    </html>
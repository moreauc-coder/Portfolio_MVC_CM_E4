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

	<div id="particles-js" class="particles-container">

	</div>
	<div class="Visuel">
		<div class="Visuel_bis">
			<?php
                echo'<div class="niveau">-/10</div>';
                echo 'Mes Compétences:';
                //generation visuel des Compétences
                for ($i = 1; $i <= $nb_Competences; $i++) {
                    $current_Competences = $Competences["Competences$i"];
                    $color = 0;
                     if ($current_Competences->niveau <= 2 ){$color = 'red';}
                     if ((3 <= $current_Competences->niveau) && ($current_Competences->niveau <= 4) ){$color = 'orange';}
                     if ((5 <= $current_Competences->niveau) && ($current_Competences->niveau <= 6) ){$color = 'yellow';}
                     if ((7 <= $current_Competences->niveau) && ($current_Competences->niveau <= 8) ){$color = 'yellowgreen';}
                     if ((9 <= $current_Competences->niveau) && ($current_Competences->niveau <= 10) ){$color = 'green';}
                    echo "
                                <ul class='liste_ul' >
                                <li class='liste_li' id='liste_li_C'>$current_Competences->Competences</li>
                                </ul><div class='note' id='$color'>$current_Competences->niveau</div>
                    ";
                }
                ?>
		</div>
		<div class="Visuel_bis">
			<?php
                echo 'Mes Expériences:';
                //generation visuel des Experiences
                for ($i = 1; $i <= $nb_Experiences; $i++) {
                    $current_Experiences = $Experiences["Experiences$i"];
                    echo "
                                <ul class='liste_ul'> 
								<div class='libelle'>bonjour je suis le libelle de l'experience</div>
                                <li class='liste_li' id='liste_li_E'>$current_Experiences->Experiences</li>
                                </ul>
                    ";
                }


                ?>
		</div>

		<div class="Visuel_bis">
			<?php
            echo 'Mes Formations:';
            //generation visuel des Formationss
            for ($i = 1; $i <= $nb_Formations; $i++) {
                $current_Formations = $Formations["Formations$i"];
                echo "

                            <ul class='liste_ul'>
							<div class='libelle'>bonjour je suis le libelle de l'experience</div>
                            <li class='liste_li' id='liste_li_F'>$current_Formations->Formations</li>
                            </ul>
                ";
            }


            ?>
		</div>
	</div>
	


	<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script src="../../js/particles.js"></script>
</body>

</html>

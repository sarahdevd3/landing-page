<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css"/>
	<!-- importer le fichier de style -->

    <title>ma landing page</title>
</head>
<body>




<?php

		$mysqli = new mysqli("localhost", "cruder", "jecrud", "landingpage");
		$mysqli -> set_charset("utf8");
		$requete = "SELECT * FROM infos_site";
		$resultat = $mysqli -> query($requete);
		while ($ligne = $resultat -> fetch_assoc()) {
			echo ("<div class='text' style=text-align:center;>");
			echo "<body style='background-color:".$ligne['background']."'>";
			echo "<h1 style=color:". $ligne['text'] . ";text-align:center>" . $ligne['titre'] ." 
			</br>" . $ligne['intro'] . "</h1>";
			echo ("</div>");
			echo "&nbsp";  echo "&nbsp"; echo "&nbsp"; echo "&nbsp";  echo "&nbsp"; echo "&nbsp";
			
            echo ("<div class='link' style=text-align:center;>");
			echo "<a href=https://twitter.com/?lang=fr><img src='". $ligne['liendeux'] ."''width='60px' height='60px'/> <a>";   echo "&nbsp";  echo "&nbsp"; echo "&nbsp";
			echo "<a href=https://github.com/sarahdevd3><img src='". $ligne['lientrois'] ."''width='60px' height='60px'/> <a>";   echo "&nbsp";  echo "&nbsp"; echo "&nbsp";
			echo "<a href=https://www.google.com/><img src='". $ligne['lienun'] ."''width='60px' height='60px'/> <a>";   echo "&nbsp";  echo "&nbsp"; echo "&nbsp";
			echo "<a href=https://www.facebook.com/><img src='". $ligne['lien'] ."''width='60px' height='60px'/> <a>";   echo "&nbsp";  echo "&nbsp"; echo "&nbsp";
			echo ("</div>");
			if ( is_singular( 'communications' ) ) {
				$title = the_title_attribute( [ 'echo' => FALSE ] );
				echo '<meta name="' . $ligne['meta']. '"" content="' . $ligne['meta']. '" />' . PHP_EOL;
			}
			
		}

		$mysqli->close();

		?>
    

</body>
</html>

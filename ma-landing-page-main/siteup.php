<?php

include"dbconf.php";


try{
  // Connexion à la bdd
  $db = new PDO('mysql:host=localhost;dbname=landingpage','cruder','jecrud');
  $db->exec('SET NAMES "UTF8"');
  //gestion des erreurs//
} catch (PDOException $e){
  echo 'Erreur : '. $e->getMessage();
  die();

}


//editer le site

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $intro = $_POST['intro'];
    $background = $_POST['background'];
    $meta= $_POST['meta'];
    $lien= $_POST['lien'];
    $lienun= $_POST['lienun'];
    $liendeux= $_POST['liendeux'];
    $lientrois= $_POST['lientrois'];
   
  
    
      $requete = "UPDATE `infos_site`
                 SET `titre` = :titre,`intro` = :intro, `background`= :background,`meta`= :meta,`lien`= :lien,`lienun`= :lienun,`liendeux`= :liendeux,`lientrois`= :lientrois
                 WHERE `id`=:id;";
      $prepare = $db->prepare($requete);
      $prepare->execute(array(
        ":id"  => $id,
        ":titre" => $titre,
        ":intro" => $intro,
        ":background" => $background,
        ":meta" => $meta,
        ":lien" => $lien,
        ":lienun" => $lienun,
        ":liendeux" => $liendeux,
        ":lientrois" => $lientrois
    
       
      ));

      $resultat = $prepare->rowCount();
      echo "<h3>Le site a bien été mis à jour</h3>";
    }


   
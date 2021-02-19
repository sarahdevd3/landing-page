<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->   
                <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                 
                }
            ?>
           <a href='deconnexion.php'><span>Déconnexion</span></a>
        


        </div>

              <!-- Editer le site -->
              <form action="siteup.php" method="post">

          <h3>Modifier le site </h3>
       
          <input type="number" name="id" required placeholder="identifiant">
          <input type="text" name="titre"  placeholder="titre">
          <input type="text" name="intro"  placeholder="intro">
          <input type="color" name="background"  placeholder="background"> 
          <input type="text" name="meta"  placeholder="meta">
          <input type="text" name="lien" placeholder="lien">
          <input type="text" name="lienun" placeholder="lien2">
          <input type="text" name="liendeux" placeholder="lien3">
          <input type="text" name="lientrois" placeholder="lien4">
          <input type="submit" name="update" value="valider">
        </form>
 
    </body>
</html>

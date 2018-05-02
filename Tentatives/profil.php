<?php 
try

{
    $bdd = new PDO('mysql:host=localhost;dbname=r0b1;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <title>R0B1 - accueil</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="CSS/graphique.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div id="nav">

    <a href="accueil.php"><img src="Ressources/logo.png" id="logo" border="0" style="width: 60px;"></a>
    <div id="milieu">
    <a href="emplois.php">Emplois</a> 
    <input type="text" id="maRecherche" placeholder="Recherche">
    </div>
    <div id="droite">
    <a href="monreseau.php">Mon réseau</a> 
    <a href="messagerie.php"><img src="Ressources/msg.png" id="msg" border="0" style="width: 60px;"></a>
    <a href="notifications.php"><img src="Ressources/notif.png" id="notif" border="0" style="width: 60px;"></a>
    
    <a href="profil.php" id="rob1"><img src="Ressources/PhotosAmis/rob1.png"  border="0" style="width: 60px;"> Robin</a>
    </div>
  </div>


  <div class="presentationProfil">
    <div class="photoDeProfil">
      <?php 
    $sql = "SELECT photo_video.nom_fichier, user.prenom, user.nom FROM photo_video, publication, user WHERE user.id_user=publication.id_proprio AND publication.id_publication=photo_video.id_publication AND photo_video.photoProfil='1' AND user.prenom='Rob1'";
    
    $result = $bdd->query($sql);
    while($data = $result->fetch()){
      
      ?>
      <span class="nomPhoto"><img src="<?php echo $data['nom_fichier']; ?>" class="photoPersonne" border="0" style="width: 100px;"/><?php echo $data['prenom']." ".$data['nom'] ;?></span>
      <?php
      
    }
      ?>
    </div>
  </div>


  <div class="publication">
    <div class="publicateur">
      <img src="Ressources/nelson.png" class="nelson" border="0" style="width: 100px;"> <br />Nelson Kakpo
    </div>
    <div class="partieTexte">
      <div class="conference"> 
        Conférence métiers
      </div>
      <div class="description">
        <br />
          Dans le souci d’assurer un contact étroit et constructif entre ses étudiants et le monde professionnel, la Faculté des Sciences Appliquées de l’Université de Liège organise depuis longtemps des visites, des stages et des travaux de fin d’études en entreprise. Dans ce même esprit, la Faculté des Sciences Appliquées organise un cycle de conférences intitulées 'Des ingénieurs parlent de leur métier'.

          Au travers de témoignages d'ingénieurs, les conférences brossent le tableau de la place des ingénieurs dans les entreprises, de la diversité actuelle des parcours professionnels d’ingénieurs civils et des apports des ingénieurs dans la société.
        <br />
      </div>
      <div class="lieuDate">
        <span class="lieu"> <img src="Ressources/lieu.png" class="lieu" border="0" style="width: 20px;"> Eiffel 1 - EM 09</span>
        <span class="date"> <img src="Ressources/date.png" class="date" border="0" style="width: 20px;"> 21 Juin 2018 </span>
      </div>
    </div>

    <div class="LCP">
      <img src="Ressources/like.png" class="like" border="0" style="width: 50px;">
      <img src="Ressources/commenter.png" class="commenter" border="0" style="width: 50px;">
      <img src="Ressources/partager.png" class="partager" border="0" style="width: 50px;">
    </div>
  </div>



  <div class="photosAmis">
    


  </div>


  
  



        <div id="footer">Copyright 2018 Prime Properties<br />
          <a href="mailto:prime.properties@gmail.com">prime.properties@gmail.com</a>
        </div>

  </body>
</html>











<?php
session_start();
   try
   {
   $bdd= new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
   }
   catch(Exeption $e)
   {
    die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
   }


   if(isset($_POST['ResidenceC'])){
      $ResidenceC = $_POST['ResidenceC'];
      $_SESSION['ResidenceC'] = $_POST['ResidenceC'];
      echo"okay";
   }
//on ajoute des elements dans notre table resid
   if(isset($_POST['submit_resid'])){
    $nom_cite = $_POST['nom_cite'];
    $matricule = $_POST['matricule'];
    $distance = $_POST['distance'];
  
    $nb_ch = $_POST['nb_ch'];
    $nb_ap = $_POST['nb_ap'];
    $nb_ap_li = $_POST['nb_ap_li'];
    $nb_ch_li = $_POST['nb_ch_li'];
    $sessionRe = $_POST['sessionRe'];
    $bdd->query("INSERT INTO emplacement (matricule,nom_cite,distance,nbre_chbre,nbre_app,Nbre_app_libre,Nbre_ch_libre,sessionRe) VALUES('$matricule','$nom_cite','$distance','$nb_ch','$nb_ap','$nb_ap_li','$nb_ch_li','$sessionRe')") ;
    header('location: /moudihouse/admin.php?start='.$_SESSION['start']);
    die();
   } 

   // on ajoute des reservations dans la table de reservation

   if(isset($_POST['form_reserv'])){
    $nom_clients=$_POST['nom_clients'];
    $prenom_clients=$_POST['prenom_clients'];
    $mail_clients=$_POST['mail_clients'];
    $portable_clients=$_POST['portable'];
    $ville_clients=$_POST['ville_clients'];
    $date_clients= $_POST['rdv'];
    $reference = $_POST['reservation'];
    $bdd->query("INSERT INTO reservation (nom_clients,prenom_clients,mail_clients,portable_clients,ville_clients,date_clients,reference) VALUES ('$nom_clients','$prenom_clients','$mail_clients','$portable_clients','$ville_clients','$date_clients','$reference') ");
    header('location: /moudihouse/index.php');
    die();
   }
       //on rajout les chambres 
   if(isset($_POST['ajout_chbre']))
   {
      $id_chambre = $_POST['id_chambre'];
      $prix = $_POST['prix'];
      $Superficie = $_POST['Superficie'];
      $matricule_im = $_POST['matricul_ch'];
      $descriptionCh = $_POST['descriptionCh'];
      $idSessionCh = $_POST['sessionCh'];
      $bdd->query("INSERT INTO chambre (id_ch,superficie,prix,matricule,descript,sessionCh) VALUES('$id_chambre','$Superficie','$prix','$matricule_im','$descriptionCh','$idSessionCh')") ;
      header('location: /moudihouse/admin.php?start='.$_SESSION['start']);
      die();
     } 

     //ajout appart

     if(isset($_POST['ajout_app'])){
      $id_app = $_POST['id_app'];
      $prix = $_POST['prix'];
      $Superficie = $_POST['Superficie'];
      $nb_d = $_POST['nb_d'];
      $nb_ch= $_POST['nb_ch'];
      $nb_sa = $_POST['nb_sa'];
      $ajout_app = $_POST['ajout_app'];
      $matricule_im = $_POST['matricul_app'];
      $descriptionAp = $_POST['descriptionAp'];
      $idSessionAp = $_POST['sessionAp'];
      $bdd->query("INSERT INTO appartement (id_ap,superficie_app,prix_app,nbre_douches,nbre_salon,nbre_chambre,matricule,descript,sessionAP) VALUES('$id_app','$Superficie','$prix','$nb_d','$nb_sa','$nb_ch','$matricule_im','$descriptionAp','$idSessionAp')") ;
      header('location: /moudihouse/admin.php?start='.$_SESSION['start']);
      die(); 
    } 

   // on supprime le contenu de la residance 
   if(isset($_POST['del_resid'])){
     $matricule_resid = $_POST['del_resid'];
     /* on se connecte a notre base de donnee pour effectuer des suppression*/
     $bdd->query(" DELETE FROM emplacement WHERE matricule='$matricule_resid'");
     $bdd->query(" DELETE FROM chambre WHERE matricule='$matricule_resid'");
     $bdd->query(" DELETE FROM appartement WHERE matricule='$matricule_resid'");
     header('location: /moudihouse/admin.php?start='.$_SESSION['start']);
     die();
     echo "okay";
   }

   // on suprimer le contenu dans certain emplacement 
   if(isset($_POST['id_del'])){
      $id_del = $_POST['id_del'];
      /* on se connecte a notre base de donnee pour effectuer des suppression*/
      $bdd->query(" DELETE  FROM appartement WHERE id_ap='$id_del' ");
      $bdd->query(" DELETE  FROM chambre    WHERE id_ch='$id_del' ");
      header('location: /moudihouse/admin.php?start='.$_SESSION['start']);
      die();
      echo "okay";
    }
 
   // on modifie le contenu de de la residance 
   if(isset($_POST['update']))
   {
      $matricul_mo = $_POST['mo_matricule'];
      $nom_cite = $_POST['nom_cite'];
      $distance = $_POST['distance'];
      $nb_ch = $_POST['nb_ch'];
      $nb_ap = $_POST['nb_ap'];
      $nb_ap_li = $_POST['nb_ap_li'];
      $nb_ch_li = $_POST['nb_ch_li'];
      $bdd->query("UPDATE emplacement SET nom_cite='$nom_cite', distance='$distance',nbre_chbre='$nb_ch',nbre_app='$nb_ap',Nbre_app_libre='$nb_ap_li',Nbre_ch_libre='$nb_ch_li' WHERE matricule='$matricul_mo' ");
      header('location: /moudihouse/admin.php?start='.$_SESSION['start']);
      die();
      echo "okay";
   }

if(isset($_POST["image"]))
{

 $data = $_POST["image"];

 $image_array_1 = explode(";", $data);

 $image_array_2 = explode(",", $image_array_1[1]);

 $data = base64_decode($image_array_2[1]);

 $imageName = time() . '.png';

 file_put_contents($imageName, $data);

 $image_file = addslashes(file_get_contents($imageName));

 $query = "INSERT INTO tbl_images(images) VALUES ('".$image_file."')";

 $statement = $connect->prepare($query);

 if($statement->execute())
 {
  echo 'Image save into database';
  unlink($imageName);
 }

}
?>
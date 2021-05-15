<?php
    ini_set('session.gc_maxlifetime', 2*60);
   session_start();

    if(isset($_GET['start'])){
      
      $start = htmlspecialchars($_GET['start']); 
      $_SESSION['start'] = $start;
      try{
          $bdd = new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" , "");
      }
      catch(Exception $e)
      {
        die('Erreur :' .$e->getMessage("desoler une erreure c'ets produit contacter un technicien "));  
      }
      $check =  $bdd->prepare('SELECT NOM,PRENOM FROM administrateur WHERE matricule = ?');
      $check->execute(array($start));
      $data = $check->fetch();
      $nom_admin= $data['NOM'];
      $prenom_admin= $data['PRENOM'];
      if(empty($nom_admin) AND empty($prenom_admin)){
        header('location: /moudihouse/connection.php?login=ad-erreur');
        die();
      }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="site agence immobilier" />
        <meta name="author" content="assako florent  junior" />
        <title>MOUDIHOUSE PAGE ADMINISTRATEUR</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="moudihouse hearder" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#emplacements">Residences</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#chambres">chambres</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#reserv">reservation</a></li>
                    </ul>
                </div>
            </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead masthead1">
            <div class="container">
                <div class="masthead-subheading">Bienvenue administrateur</div>
            </div>
    </header>
    <!-- admministrateur emplacement-->
    <section class="page-section bg-light" id="emplacements">
            <div class="container" id="entete"> <div class="text-center"> <h4>bienvenue <?= $nom_admin ?> <?= $prenom_admin ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                           <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                           </svg> <h4></div> 
            </div>
            <div class="container-xl">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Résidences populaires</h2>
                    <h3 class="section-subheading text-muted">Vous pouvez rajouter autant de résidences en cliquant sur ajouté</h3>
                </div>
                <div class="box-emplacements">
                   <div class="header-emplacements">
                     <a href="/moudihouse/index.php?preveiws=<?=$start ?>" > <span type="button" class="btn btn-sm" > preveiws <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        
                        </span>
                      </a>
                   </div>
                   <div class="cont-emplacements">
                    <div class="row">
                       <?php 
                         //on se connect a notre  base de donnee
                          try
                           {
                             $bdd= new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                           }
                          catch(Exeption $e)
                          {
                          die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                          }
                   // on parcour notre code pour y ajouter les residences qui sont dans notre base de donnee 
                          $empl1 = $bdd->query(" SELECT * FROM emplacement");
                          while ($row = $empl1->fetch()):
                          
                         ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="des_emp">
                              <div class="hea_des_emp1"  >
                              <?php if( $row['sessionRe'] == session_id())
                              { 
                              ?>
                               <div class="insertImage">
                                <button type = "button" class= " btn btn-warning ajouterImage" data-toggle="modal" href="#insertimageModal" onclick="imageMatricule('<?=$row['matricule'];?>')" > ajouter une image </button> <button type = "button" class= "btn btn-danger ajouterImage" data-toggle="modal" href="#sup<?=$row['matricule'];?>" > supprimer image </button>
                               </div>
                               <?php
                               } 
                               ?>
                               <?php 
                               if($row['sessionRe'] != session_id())
                               {
                                 if($_SESSION['start'] == "00asas"){
                                ?>
                              <div class="insertImage">
                                <button type = "button" class= " btn btn-warning ajouterImage" data-toggle="modal" href="#insertimageModal" onclick="imageMatricule('<?=$row['matricule'];?>')" > ajouter une image </button> <button type = "button" class= "btn btn-danger ajouterImage" data-toggle="modal" href="#sup<?=$row['matricule'];?>" > supprimer image </button>
                              </div>
                                <?php
                                 }
                               }
                               ?>
                               
                                 <a data-toggle="modal" href="#<?=$row['matricule'];?>"> 
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill close_m" viewBox="0 0 16 16">
                                         <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                      </svg>
                                      <img src="images/house.jpg" class="img-fluid" alt=""/>
                                      <div class="alert_img">regarder toutes les images</div> 
                                </a>
                                    </div>
                                <div class="con_des_emp">
                              <?php if( $row['sessionRe'] == session_id())
                              { 
                              ?>
                              <div class="button_des_emp"> <button type="button" class="btn btn-danger" onclick="supre('<?=$row['matricule'];?>');">supprimer ce contenu</button> <button data-toggle="modal" href="#for_modif" type="button" class="btn btn-warning" onclick="modific('<?=$row['matricule'];?>')">modifier</button> </div>
                               <?php
                               } 
                               ?>
                               <?php 
                               if($row['sessionRe'] != session_id())
                               {
                                 if($_SESSION['start'] == "00asas"){
                                ?>
                             <div class="button_des_emp"> <button type="button" class="btn btn-danger" onclick="supre('<?=$row['matricule'];?>');">supprimer ce contenu</button> <button data-toggle="modal" href="#for_modif" type="button" class="btn btn-warning" onclick="modific('<?=$row['matricule'];?>')">modifier</button> </div>
                                <?php
                                 }
                               }
                               ?>
                                 
                                  <div class="con_des_emp1"> <span>Nom de la citée :</span> <span> <u><b> <?php echo $row['nom_cite'] ?> </b></u></span> </div> <div class="con_des_emp2">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                        </svg> Distance par rapport au campus : <?php echo $row['distance'] ?>M;</div> <div class="con_des_emp3"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                           <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                           <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                        </svg>nombres de chambres modernes: <?php echo $row['nbre_chbre'] ?>  ;</span> <span> nombres libres : <?php echo $row['Nbre_ch_libre'] ?> ;</span></div> <div class="con_des_emp4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                              <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                       </svg>nombres d'apparts:  <?php echo $row['nbre_app'] ?> ;</span> <span> nombres libres : <?php echo $row['Nbre_app_libre'] ?> ; </span></div>
                                </div>
                            </div>
                        </div>

      <!---##########################----->
    <!-- popup carrousel  pour residence-->
   <div class=" modal fade" id="<?=$row['matricule'];?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-recid">
                <div class="modal-content">
                   <div class="container">
                        <div id="carouselExampleControls<?=$row['matricule'];?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                              <?php 
                                           try
                                           {
                                            $bddimg= new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                                           }
                                          catch(Exeption $e)
                                          {
                                          die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                                          }
                                          $matriculeImage=$row['matricule'];
                                          $checkimg = $bddimg->query(" SELECT * FROM image_empp WHERE matricule = $matriculeImage" );

                                          if(empty($checkimg['img_empp'])){
                                          ?>
                                            <div class="carousel-item active">
                                      <img class="recid_popup" src="images/house.jpg" alt="<?=$row['nom_cite'];?>">
                                    <div class="carousel-caption d-none d-md-block" >
                                
                                    <a   href="#<?=$row['matricule'];?>" id="idlien" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill svg_down" viewBox="0 0 16 16">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                         </svg>regarder les offres  de cette residence <?=$row['nom_cite'];?>
                                    </a>
                                  </div>
                                </div>
                                <?php
                                    }
                                    else{
                                ?>
                                      <div class="carousel-item active">
                                        <img class="recid_popup" src="<?=$checkimg['img_empp'];?>" alt="<?=$row['nom_cite'];?>">
                                      <div class="carousel-caption d-none d-md-block" >
                                
                                     <a   href="#<?=$row['matricule'];?>" id="idlien" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill svg_down" viewBox="0 0 16 16">
                                         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                         </svg>regarder les offres  de cette residence <?=$row['nom_cite'];?>
                                     </a>
                                   </div>
                                  </div>
                                <?php
                                    }
                                  ?>
                                   <!------##################### on rajoute les images du silder--------->
                           </div>
                       <a class="carousel-control-prev" href="#carouselExampleControls<?=$row['matricule'];?>" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carouselExampleControls<?=$row['matricule'];?>" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                       </a>
                    </div>
                   </div>
                </div>
            </div>
    </div>
                        <!-- image-->
                        <!-- ajouter image-->
                        <div id="insertimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">insérer une image</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo">
            <div style = " width:100%; height:250px; border:1px solid black; margin-bottom:20px;  background-color: rgb(183, 183, 184); ">
             <img  style = " width:100%; height:100%;" id='output'>
            </div>
             <form id="myForm">
              <input type='file' name ="fyleRe" accept='image/*' onchange='openFile(event)'/>
              <input type = "hidden" name = "fyle_matricule"  value ="0" id="fyle_image" /> 
             </form>
            </div>
          </div>
          <div class="col-md-4" style="padding-top:30px;">
        <br/>
        <br/>
        <br/>
            <button class="btn btn-success crop_image">uploader</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- fin --->
<!--supprimer image-->

<div id="sup<?=$row['matricule'];?>" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">supprimer des images<?=$row['matricule'];?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo">
           
               
            </div>
          </div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!---fin -->
                  <?php endwhile; ?>
                        <!--##############f fin ############3---->
                        <div class=" div_lien_ajout col-md-4 col-sm-6">
                           <div class="ajout-inter">
                               <a class="lien-ajout" data-toggle="modal" href="#for_ajout" onclick="creat_ap_ch('0','<?=session_id()?>' );">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                    </svg>
                               </a>

                           </div>
                        </div>
                     </div>
                   </div>
                </div>
            </div>
    </section>
    <!--administrateur chambres-->
    <section class="page-section bg-light" id="chambres">
            <div class="container">
                <div class="box-chambres">
                   <div class="header-emplacements">
                      <a href="/moudihouse/index.php?preveiws=<?=$start ?>" > <span type="button" class="btn btn-sm" > preveiws <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        
                        </span>
                       </a>
                   </div>
                   <!-----on rajoute les contenus des residences ------>

                   <?php 
                         //on se connect a notre  base de donnee
                          try
                           {
                             $bdd= new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                           }
                          catch(Exeption $e)
                          {
                          die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                          }

                          $empl1 = $bdd->query(" SELECT * FROM emplacement");
                          while ($row1 = $empl1->fetch()):
                         
                         ?>

                                       <div class="cont-chambes" id="<?php echo $row1['matricule']?>">
                        <div class="text-center">
                            <h2 class="section-heading text-uppercase" id="<?php echo $row1['matricule']?>" > <?php echo $row1['nom_cite'] ?></h2>
                            <h3 class="section-subheading text-muted">Vous pouvez rajouter autant d'appartements et chambre  cliquant sur ajouté</h3>
                        </div>
                        <div class="row">
                              <!---##################################################-->
                              <!---on rajoute des chambres et appartement en parcourant notre base de donnee--->
                              <?php 
                               $matricule = $row1['matricule'];
                              try
                              {
                                 $bdd = new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                              }
                              catch(Exeption $e)
                              {
                               die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                              }
                              $appart = $bdd->query("SELECT * FROM appartement WHERE matricule ='$matricule'" );
                               while($row2 = $appart->fetch()):
                              ?>
                              <div class="col-md-4 col-sm-6">
                              <div class="des_emp">
                                <div class="hea_des_emp"  >
                              <?php if( $row2['sessionAP'] == session_id())
                              { 
                              ?>
                                <div class="insertImage">
                                    <button type = "button" class= " btn btn-warning ajouterImage" data-toggle="modal" href="#insertimageModal1" onclick="imageMatriculeCt('<?=$row2['id_ap'];?> ','<?=$row2['matricule'];?>')" > ajouter une image </button> <button type = "button" class= "btn btn-danger ajouterImage" data-toggle="modal" href="#sup<?php echo $row2['id_ap'];?>" > supprimer image </button>
                                </div>
                               <?php
                               } 
                               ?>
                               <?php 
                               if($row2['sessionAP'] != session_id())
                               {
                                 if($_SESSION['start'] == "00asas"){
                               ?>
                              <div class="insertImage">
                                    <button type = "button" class= " btn btn-warning ajouterImage" data-toggle="modal" href="#insertimageModal1" onclick="imageMatriculeCt('<?=$row2['id_ap'];?> ','<?=$row2['matricule'];?>')" > ajouter une image </button> <button type = "button" class= "btn btn-danger ajouterImage" data-toggle="modal" href="#sup<?php echo $row2['id_ap'];?>" > supprimer image </button>
                              </div>
                               <?php
                                 }
                               }
                               ?>
                                <!-----############ on met en place les differents fonctions de reservation et de suppression #####--->
                              <a data-toggle="modal" href="#<?php echo $row2['id_ap'];?>">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                                         <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                      </svg>
                                      <img src="images/house.jpg" class="img-fluid" alt=""/>
                                      <div class="alert_img">regarder toutes les images</div>  
                                   </a> 
                                </div>
                                <div class="con_des_emp">
                                <?php if( $row2['sessionAP'] == session_id())
                              { 
                              ?>
                                 <div class="button_des_emp"> <button type="button" class="btn btn-danger"  onclick="delet_con('<?php echo $row2['id_ap'];?>');">supprimer ce contenu</button> </div>
                               <?php
                               } 
                               ?>
                               <?php 
                               if($row2['sessionAP'] != session_id())
                               {
                                 if($_SESSION['start'] == "00asas"){
                               ?>
                                  <div class="button_des_emp"> <button type="button" class="btn btn-danger"  onclick="delet_con('<?php echo $row2['id_ap'];?>');">supprimer ce contenu</button> </div>
                               <?php
                                 }
                               }
                               ?>

                                
                                <div><h2><u>appartement NO</u>:<?php echo $row2['id_ap'];?></h2>   <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                           <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                           <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                           </svg></span> <span> <?php echo $row2['prix_app'];?>fcfa</span></div>
                                        <hr>
                                        <ul> <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
                                              </svg> <b><u>Nombres de chambres </u> </b>: <span style="border: 1px solid black ; border-radius:2px 2px 2px 2px; margin:5px ; padding:2px;">  <?php echo $row2['nbre_chambre'];?> </span></li> <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
                                              </svg> <b> <u> Nombres de douches </u> </b>: <span style="border: 1px solid black ; border-radius:2px 2px 2px 2px; margin:5px ; padding:2px; "><?php echo $row2['nbre_douches'];?></span></li> <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
                                              </svg> <b> <u>Nombres de sallons </u></b>: <span style="border: 1px solid black ; border-radius:2px 2px 2px 2px; margin:5px ; padding:2px;"><?php echo $row2['nbre_salon'];?> </span></li>
                                        </ul>
                                </div>
                              </div>
                            </div>
                                              <!--supprimer image-->

<div id="sup<?php echo $row2['id_ap'];?>" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">supprimer des images<?php echo $row2['id_ap'];?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo">
           
               
            </div>
          </div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!---fin -->
                            <?php endwhile ?>
                     <!-- on parcour notre base de donnee pour y rajouter les chambres -->
                            <?php 
                              try
                              {
                                 $bdd = new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                              }
                              catch(Exeption $e)
                              {
                               die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                              }
                              $appart = $bdd->query("SELECT * FROM chambre WHERE matricule ='$matricule'");
                                while($row3 = $appart->fetch()):
                              ?>
                            <div class="col-md-4 col-sm-6">
                              <div class="des_emp">
                                <div class="hea_des_emp"  >

                                <?php if($row3['sessionCh'] == session_id())
                              { 
                              ?>
                                <div class="insertImage">
                                    <button type = "button" class= " btn btn-warning ajouterImage" data-toggle="modal" href="#insertimageModal1" onclick="imageMatriculeCt('<?=$row3['id_ch'];?>' , '<?=$row3['matricule']; ?>' )" > ajouter une image </button> <button type = "button" class= "btn btn-danger ajouterImage" data-toggle="modal" href="#sup<?=$row3['id_ch'];?>" > supprimer image </button>
                                  </div>
                               <?php
                               } 
                               ?>
                               <?php 
                               if($row3['sessionCh'] != session_id())
                               {
                                 if($_SESSION['start'] == "00asas"){
                               ?>
                                  <div class="insertImage">
                                    <button type = "button" class= " btn btn-warning ajouterImage" data-toggle="modal" href="#insertimageModal1" onclick="imageMatriculeCt('<?=$row3['id_ch'];?>' , '<?=$row3['matricule']; ?>' )" > ajouter une image </button> <button type = "button" class= "btn btn-danger ajouterImage" data-toggle="modal" href="#sup<?=$row3['id_ch'];?>" > supprimer image </button>
                                  </div>
                                <?php
                                 }
                               }
                               ?>
                                  
                                    <a data-toggle="modal" href="#<?php echo $row3['id_ch'];?>" onclick = " ajout('<?=$row3['id_ch'];?>' , '<?=$row3['matricule']; ?>')">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                                         <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                      </svg>
                                      <img src="images/house.jpg" class="img-fluid" alt=""/>
                                      <div class="alert_img">regarder toutes les images</div>  
                                   </a> 
                                </div>
                                <div class="con_des_emp">
                                <?php if($row3['sessionCh'] == session_id())
                              { 
                              ?>
                                 <div class="button_des_emp"> <button type="button" class="btn btn-danger" onclick="delet_con('<?php echo $row3['id_ch'];?>');">supprimer ce contenu</button> </div>
                               <?php
                               } 
                               ?>
                               <?php 
                               if($row3['sessionCh'] != session_id())
                               {
                                 if($_SESSION['start'] == "00asas"){
                               ?>
                                  <div class="button_des_emp"> <button type="button" class="btn btn-danger" onclick="delet_con('<?php echo $row3['id_ch'];?>');">supprimer ce contenu</button> </div>
                               <?php
                                 }
                               }
                               ?>
                                        <div><h2><u>CHAMBRE NO</u>: <?php echo $row3['id_ch'];?> </h2></div>
                                        <hr>
                                        <div> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                           <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                           <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                           </svg></span> <span> <?php echo $row3['prix'];?>fcfa</span><span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                                           <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
                                           </svg><span> <?php echo $row3['superficie'];?> M2</span></span>
                                        </div> 
                                </div>
                              </div>
                            </div>
                            <!--supprimer image-->

<div id="sup<?=$row3['id_ch'];?>" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">supprimer des images<?php echo $row3['id_ch'];?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo">
           
               
            </div>
          </div>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!---fin -->
                            <?php endwhile ?>
                          
                <!------ button de rajout des chambres et apparts ---------->
                            <div class=" div_lien_ajout col-md-4 col-sm-6">
                             <div class="ajout-inter">
                               <a class="lien-ajout" data-toggle="modal"  href="#cont_cit" onclick="creat_ap_ch('<?=$row1['matricule'];?>', '<?=session_id()?>' );">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                    </svg>
                               </a> 
                             </div>
                            </div> 
                        </div>
                        <a class="up nav-link js-scroll-trigger active" href="#entete" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                               <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                            </svg>
                        </a>
                    </div>
                
  
    <?php endwhile ?>
            <!-- image-->
                        <!-- ajouter image-->
                        <div id="insertimageModal1" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">insérer une image</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 text-center">
            <div id="image_demo">
            <div style = " width:100%; height:250px; border:1px solid black; margin-bottom:20px;  background-color: rgb(183, 183, 184); ">
             <img  style = " width:100%; height:100%;" id='outputCt'>
            </div>
             <form id="myForm">
              <input type='file'  name ="fyleCt" accept='image/*' onchange='openFileCt(event)'/>
              <input type = "hidden" name = "fyle_matricule"  value ="0" id="fyle_image" /> 
              <input type = "hidden" name = "fyle_id"  value ="0" id="fyle_image_ct1" />
             </form>
            </div>
          </div>
          <div class="col-md-4" style="padding-top:30px;">
        <br/>
        <br/>
        <br/>
            <button class="btn btn-success crop_image">uploader</button>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- fin --->
        <!-------------formulaire de rajout d'une chambre------->
    <div class="modal fade" id="id_chanbre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       <!------>
       <div class="container app_ch">
       <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"> Creation d'une nouvelle chambre</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
       </div>
            <div class="cont_app_ch">
            <form action="crud.php" method="post">
              <div class="row">
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> ID chambre</label>
                            <input type="text" name="id_chambre" class="form-control" placeholder="ap1110"  required> 
                              <input type="hidden" name=" matricul_ch" value="0" id="matricul_ch1">
                              <input type="hidden" name="sessionCh" value="0" id="sessionCh">
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> PRIX</label>
                            <input type="text" name="prix" class="form-control" placeholder="15000"  required>
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> Superficie</label>
                            <input type="text" name="Superficie" class="form-control" placeholder="2222"  required>
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <textarea name="descriptionCh" class="description" placeholder="text de description"  required></textarea>
                        </div>
                   </div>
               </div>
               <div class="fo_app_ch">
               <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button> <input  type="submit" name="ajout_chbre"  value="Envoyer">
            </div>
               </form>
               
            </div>
       </div>
    </div>
    </div>
    </div>
    <!-------fin----------->
      <!-------------formulaire de rajout d'un appartement------->
  <div class="modal fade" id="id_app" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       <!----->
       <div class="container app_ch">
            <div class="header_app_ch">
            <h5 class="modal-title">Creation d'un nouveau appartement <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button></h5>
            </div>
            <div class="cont_app_ch">
             <form action="crud.php" method="post">
              <div class="row">
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> ID appartement</label>
                            <input type="text" name="id_app" class="form-control" placeholder="ap1110"  required>
                            <input type="hidden" name=" matricul_app" value="0" id="matricul_app1">
                            <input type="hidden" name="sessionAp" value="0" id="sessionApp">
                           
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> PRIX</label>
                            <input type="text" name="prix" class="form-control" placeholder="15000"  required>
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> Superficie</label>
                            <input type="text" name="Superficie" class="form-control" placeholder="2222"  required>
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de douches</label>
                            <input type="number" name="nb_d" step="1" value="0" min="0" max="5" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de chambres</label>
                            <input type="number" name="nb_ch" step="1" value="0" min="0" max="30" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de salon</label>
                            <input type="number" name="nb_sa" step="1" value="0" min="0" max="30" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <textarea name="descriptionAp" class="description" placeholder="text de description"  required></textarea>
                        </div>
                   </div>
              </div>
              <div class="fo_app_ch">
              <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button> <input type="submit" name=" ajout_app"  value="Envoyer">
            </div>
              </form>
            </div>  
       </div>
      </div>
    </div>
  </div>
  <!---fin---->
       <!---- popup ajout chambre appart---->
       <div class="modal fade" id="cont_cit" tabindex="-2" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nouvelle creation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                 </div>
                 <div class="modal-body">
                    veuillez choisir un formulaire en fonction de votre besoin
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" data-toggle="modal" href="#id_chanbre" >chambre</button>
                   <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" data-toggle="modal" href="#id_app">appartement</button>
                 </div>
              </div>
          </div>
       </div>
        <!---fin ----popup ajout chambre appart-->
                    <!----##########---fin de section--#### ---box  chambre------>
                </div>
            </div>
    </section>
     <!---popup chambre appartement --->

     <?php 
                         //on se connect a notre  base de donnee
                          try
                           {
                             $bdd= new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                           }
                          catch(Exeption $e)
                          {
                          die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                          }
                          $empl1 = $bdd->query(" SELECT * FROM emplacement");
                          while ($rowpopup = $empl1->fetch()):
                         ?>
                           <?php 
                               $matricule = $rowpopup['matricule'];
                               $contend = $bdd->query("SELECT * FROM appartement WHERE matricule ='$matricule'" );
                               while($rowpopup1 = $contend->fetch()):
                              ?>
     <div class=" modal fade" id="<?=$rowpopup1['id_ap']?>" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="container">
                     <div id="carouselExampleIndicators<?=$rowpopup1['id_ap']?>" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicatorsAp" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicatorsAp" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicatorsAp" data-slide-to="2"></li>
                        </ol>
                     <div class="carousel-inner">
                     <?php 
                                          
                                          $idAp = $rowpopup1['id_ap'];
                                         $checkimg = $bdd->query(" SELECT * FROM image_ch_app WHERE matricule = $matricule and id_app = $idAp" );

                                         if(empty($checkimg['img_ch_app'])){
                                         ?>
                       <div class="carousel-item active">
                          <img class="d-block w-100" src="images/house.jpg" alt="moudihouse">
                       </div>
                       <div class="carousel-item">
                          <img class="d-block w-100" src="images/house.jpg" alt="moudihouse">
                       </div>
                       <div class="carousel-item">
                           <img class="d-block w-100" src="images/house.jpg" alt="moudihouse">
                       </div>
                       <?php 
                       }
                       else{
                       ?>
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?=$checkimg['img_ch_app'];?>" alt="moudihouse">
                       </div>
                       <div class="carousel-item">
                          <img class="d-block w-100" src="<?=$checkimg['img_ch_app'];?>" alt="moudihouse">
                       </div>
                       <div class="carousel-item">
                           <img class="d-block w-100" src="<?=$checkimg['img_ch_app'];?>" alt="moudihouse">
                       </div>
                       <?php
                        }
                       ?>
                       
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators<?=$rowpopup1['id_ap']?>" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators<?=$rowpopup1['id_ap']?>" role="button" data-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
                     </div>
                     <div><p><?php echo $rowpopup1['descript'] ; ?></p></div>
                     <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button>
                   </div>
                </div>
            </div>
        </div>
        <?php endwhile ?>

        <?php 
                               $matricule = $rowpopup['matricule'];
                               $contend = $bdd->query("SELECT * FROM chambre WHERE matricule ='$matricule'" );
                               while($rowpopup2 = $contend->fetch()):
                              ?>
     <div class=" modal fade" id="<?=$rowpopup2['id_ch']?>" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog">
               <div class="modal-content">
                   <div class="container">
                     <div id="carouselExampleIndicators<?=$rowpopup2['id_ch']?>" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicatorsCh" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicatorsCh" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicatorsCh" data-slide-to="2"></li>
                        </ol>
                     <div class="carousel-inner">
                     <?php 
                                         
                                         $idCh = $rowpopup2['id_ch'];
                                        $checkimg1 =$bdd->query(" SELECT * FROM image_ch_app WHERE matricule = $matricule and id_ch = $idCh" );

                                        if(empty($checkimg1['img_ch_app'])){
                                        ?>
                      <div class="carousel-item active">
                         <img class="d-block w-100" src="images/house.jpg" alt="moudihouse">
                      </div>
                      <div class="carousel-item">
                         <img class="d-block w-100" src="images/house.jpg" alt="moudihouse">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="images/house.jpg" alt="moudihouse">
                      </div>
                      <?php 
                      }
                      else{
                      ?>
                       <div class="carousel-item active">
                         <img class="d-block w-100" src="<?=$checkimg1['img_ch_app'];?>" alt="moudihouse">
                      </div>
                      <div class="carousel-item">
                         <img class="d-block w-100" src="<?=$checkimg1['img_ch_app'];?>" alt="moudihouse">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="<?=$checkimg1['img_ch_app'];?>" alt="moudihouse">
                      </div>
                      <?php
                       }
                      ?>
                     
                    </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators<?=$rowpopup2['id_ch']?>" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators<?=$rowpopup2['id_ch']?>" role="button" data-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
                     </div>
                     <div> <p><?php echo $rowpopup2['descript']; ?></p></div>
                     <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button>
                   </div>
                </div>
            </div>
        </div>
        <?php endwhile ?>
      <?php endwhile ?>

    <!--administrateur reservation-->

    <?php 
    if($_SESSION['start'] == "00asas")
    {
     ?>
    <section id="reserv">
      <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase"> reservation </h2>
            <div class="row table1">
             <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NOM</th>
                  <th scope="col">PRENOM</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">TEL</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">DATE</th>
                  <th scope="col">produit-reserve</th>

                </tr>
              </thead>
              <tbody>
               <?php 
                 try
                 {
                   $bdd= new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");
                 }
                catch(Exeption $e)
                {
                die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
                }
         // on parcour notre base de donnee pour y ajouter des reservations
                $empl1 = $bdd->query(" SELECT * FROM reservation");
                while ($reserti = $empl1->fetch()):
               ?>
                <tr>
                   <th scope="row"><?php echo $reserti['no_reserv'] ?></th>
                    <td> <?php echo $reserti['nom_clients'] ?></td>
                    <td><?php echo $reserti['prenom_clients'] ?></td>
                    <td><?php echo $reserti['mail_clients'] ?></td>
                    <td><?php echo $reserti['portable_clients'] ?></td>
                    <td><?php echo $reserti['ville_clients'] ?></td>
                    <td><?php echo $reserti['date_clients'] ?></td>
                    <td><?php echo $reserti['reference'] ?></td>
                </tr>
                <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </div>  
      </div>
    </section>
  
    <a class="up nav-link js-scroll-trigger active" href="#entete" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                               <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                            </svg>
    </a>
    <?php
    }
    ?>
<!----formulaire de modification d'un formulaire------------>

  <div class="modal fade" id="for_modif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       <!--####--->
       <div class="container mod_resid">

            <div class="header_mod">
              Modification du contenu
            </div>
            <div class="cont_mod">
            <form action="crud.php" method="post" >
              <div class="row">
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> NOM</label>
                            <input type="text" name="nom_cite" class="form-control"  required>
                            <input id="modifi_resid" type="hidden" name="mo_matricule" value = "0">
                           </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> distance parraport au campus</label>
                            <input type="number" name="distance" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de chambres </label>
                            <input type="number" name="nb_ch" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres appartement</label>
                            <input type="number" name="nb_ap" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres d'apparts libre</label>
                            <input type="number" name="nb_ap_li" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de chambres libre</label>
                            <input type="number"  name="nb_ch_li" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
              </div>
              <div class="fo_mod">
              <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button>  <input name="update"type="submit" value="Envoyer">
             
            </div>
              </form>
            </div> 
       </div>
      </div>
    </div>
  </div>
        <!--- formulaire d'ajout d'une residence----->
    <div class="modal fade" id="for_ajout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
      <!----->
        <div class="container resid">
            <div class="header_resid">
              Creation d'une nouvelle residence
            </div>
            <div class="cont_resid">
              <form action="crud.php" method="post" enctype="multipart/form-data">
              <div class="row">
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> NOM</label>
                            <input type="text" name="nom_cite" class="form-control" placeholder="EX: PALACE" required>
                            <input type="hidden" name="sessionRe" value="0" id="sessionRe">
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                                <label> Matricule:</label>
                                <input type="text" name="matricule" class="form-control" placeholder="EX: PA10001" required>
                                     
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label> distance parraport au campus</label>
                            <input type="number" name="distance" step="1" value="0" min="0" max="64" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de chambres </label>
                            <input type="number"  name="nb_ch" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres appartement</label>
                            <input type="number" name="nb_ap" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres d'apparts libre</label>
                            <input type="number" name="nb_ap_li" step="1" value="0" min="0" max="100" required> 
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group" >
                            <label>Nombres de chambres libre</label>
                            <input type="number" name="nb_ch_li" step="1" value="0" min="0" max="100" required>
                        </div>
                   </div>
              </div>
              <div class="fo_resid">
              <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button> <button type="submit" name="submit_resid" class="btn btn-secondary" > Envoyer </button> 
                  </div>
            </form>
          </div>
       </div>
      </div>
    </div>
  </div>
                            <script type="text/javascript">
                                     function imageMatricule(matricule){
                                           $('#fyle_image').val(matricule);
                                     }
                                    function imageMatriculeCt(id,matricule){
                                      $('#fyle_image_ct1').val(id);
                                      $('#fyle_imageCt').val(matricule);
                                    }
                                      // fonction de modification du contenu de residence 
                                    
                                      function modific(matricule){
                                            $('#modifi_resid').val(matricule);
                                    } 
                                    
                                      // fonction de suppression de residence
                                     function supre(matricule){
                                        $.ajax({
                                          type:'POST',
                                         url:'crud.php',
                                          data:'del_resid=' + matricule,
                                          success:function(reponce){
                                            location.reload();
                                             alert("l'élément a été supprimé");
                                          }
                                        });
                                     }

                                      // fonction pour supprimer des chambres et appart
                                      function delet_con(id_matricule){ 
                                          $.ajax({
                                          type:'POST',
                                         url:'crud.php',
                                             data:'id_del=' + id_matricule,
                                             success:function(reponce){
                                                location.reload();
                                                alert("l'élément a été supprimé");
                                             }
                                          });
                                       }

                                       //fonction pour creer des apparts et chambre 
                                      function creat_ap_ch(matricule,idSession)
                                      {

                                        $('#matricul_ch1').val(matricule);
                                        $('#matricul_app1').val(matricule);
                                        $('#sessionCh').val(idSession);
                                        $('#sessionApp').val(idSession);
                                        $('#sessionRe').val(idSession);
                                        }
                                       
                              </script>

                      <script type="text/javascript">
                           var openFile = function(event) {
                           var input = event.target;

                           var reader = new FileReader();
                          reader.onload = function(){
                           var dataURL = reader.result;
                            var output = document.getElementById('output');
                          output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
    };
</script>
<script type="text/javascript">
                           var openFileCt = function(event) {
                           var input = event.target;

                           var readerCt = new FileReader();
                          readerCt.onload = function(){
                           var dataURL = readerCt.result;
                            var outputCt = document.getElementById('outputCt');
                          outputCt.src = dataURL;
    };
    readerCt.readAsDataURL(input.files[0]);
    };
</script>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="scripts1.js"></script>
</html>
<?php
      }
      else{
        header('location: /moudihouse/connection.php?login=ad-erreur');
        die();
      }
?>
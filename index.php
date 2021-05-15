<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="site agence immobilier" />
        <meta name="author" content="assako florent" />
        <title>MOUDIHOUSE</title>
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Emplacements</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">chambres</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team"> équipe</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenue à yamsoki</div>
                <div class="masthead-heading text-uppercase">site immobilié</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
        <!----#####################3----->
        <?php
          if(isset($_GET['preveiws'])){
            $preveiws = htmlspecialchars($_GET['preveiws']);
                      ?>
          
            <a href="/moudihouse/admin.php?start=<?=$preveiws?>" type="button" class=" retour btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                 <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                 </svg>retour page admin
            </a>
        <?php
             }
        ?>
            <div class="container">
              <div class="text-center">
                  <h2 class="text-service" id="entete" >nos services</h2>
                  <h3 class="text-service1">Nous offrons diverce services dans le dommaine du numérique</h3>
              </div>
              <div class="row">
                  <div class="col-md-4 serviweb">
                      <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                          <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                        </svg>
                        <h3><B>création de site web & application web</B></h3>
                        <p> technologie pour la realisation de vos sites web et applications web . 
                        wordpress pour vos site vitrine , des frameworkss telque Angular js ; VueJs ; Laravel bootstrap pour la realisation de vos applications web.</p>
                     </div>
                  </div>
                  <div class="col-md-4 servimmb">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                         <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg>
                        <h3><B>Instalation et maintenance du réseau local domestique ou de burreau</B></h3>
                        <p> Nous montons un reseau local sécurisé et fiable en fonction de vos besoin </p>
                    </div>
                  </div>
                  <div class="col-md-4 ecommerce">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                      </svg>
                      <h3><B> creation de site ecommerce</B></h3>
                      <p> creation de site ecommerce avec des technologie comme woocommerce ; prestashop ; shopify et bien d'autre </p>
                    </div>
                  </div>
              </div>
            </div>
        </section>
        <!--  session Emplacements populaires-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container-xl">
                <div class="text-center" >
                    <h2 class="section-heading text-uppercase">Résidence</h2>
                    <h3 class="section-subheading text-muted">Liste des différentes résidences à yamsoki</h3>
                </div>
                <div class="cont-emplacements" id="resid">
                    <div class="row">
                        <!-- on affiche tout le contenu de notre base de donnee en terme de residence -->
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
                                <div class="hea_des_emp"  >
                                   <a data-toggle="modal" href="#<?=$row['matricule'];?>" >
                                      <div class="alert_img">regarder toutes les images</div>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                                         <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                      </svg>
                                      <img src="images/house.jpg" class="img-fluid" alt=""/> 
                                   </a> 
                                </div>
                                <div class="con_des_emp">
                                    <div class="con_des_emp1"> <span>Nom de la résidence :</span> <span><b> <u> <?php echo $row['nom_cite'] ;?> </b> </u> </span> </div> <div class="con_des_emp2">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                        </svg> Distance par rapport au campus : <?php echo $row['distance'] ;?> M</div> <div class="con_des_emp3"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                           <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                           <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                        </svg>nombres de chambres modernes: <?php echo $row['nbre_chbre'] ;?> ;</span> <span> nombres libres :  <?php echo $row['Nbre_ch_libre'] ;?> ;</span></div> <div class="con_des_emp4"> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                            <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                              <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                       </svg>nombres d'apparts:  <?php echo $row['nbre_app'] ;?> ;</span> <span> nombres libres :  <?php echo $row['Nbre_app_libre'] ;?>;</span></div>
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
                        <?php endwhile ?>
                    </div>
                </div>
            </div>
            <!-- fin--->
        </section>
        <!--chambres et appartements à loué-->
        <section class="page-section" id="about">
            <div class="container-md">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">chambre et appartement à louer</h2>
                    <h3 class="section-subheading text-muted">Ces chambres et appartements sont tous modernes</h3>
                </div>  
                <!--- contenu  des residences ----->
                               <!-----on rajoute automatiquement les sessions des residences------>

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
                            <h2 class="section-heading text-uppercase"> <u><?php echo $row1['nom_cite'] ;?></u></h2>
                            </div>
                        <div class="row">
                          
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
                                   <div class="button_des_emp_index"> <button type="button"  class="btn btn-warning"  data-toggle="modal" data-target="#resevation" onclick="reserv('<?php echo $row2['id_ap'];?>');" >reserver une visite</button> </div>
                                   <a data-toggle="modal" href="#<?=$row2['id_ap'];?>" >
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                                         <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                      </svg>
                                      <img src="images/house.jpg" class="img-fluid" alt=""/> 
                                      <div class="alert_img">regarder toutes les images</div> 
                                   </a> 
                                </div>
                                <div style=" border:1px solid #f8f9fa  ; border-radius: 0px 0px 5px 5px; background-color: #d7dbdf; " class="con_des_emp">
                                <div><h2><u>appartement NO</u>:<?php echo $row2['id_ap'];?></h2>  <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                           <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                           <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                           </svg></span> <span> <?php echo $row2['prix_app'];?>fcfa</span></div>
                                        <hr>
                                         <ul> <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
                                              </svg> <b><u>Nombres de chambres </u> </b>: <span style="border: 1px solid black ; border-radius:2px 2px 2px 2px; margin:5px ; padding:2px;">  <?php echo $row2['nbre_chambre'];?> </span></li> <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
                                              </svg> <b> <u> Nbre de douches </u> </b>: <span style="border: 1px solid black ; border-radius:2px 2px 2px 2px; margin:5px ; padding:2px; ">  <?php echo $row2['nbre_douches'];?> </span></li> <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
                                              </svg> <b> <u>Nombres de sallons </u></b>: <span style="border: 1px solid black ; border-radius:2px 2px 2px 2px; margin:5px ; padding:2px;">  <?php echo $row2['nbre_salon'];?> </span></li>
                                        </ul>
                                    </div>
                              </div>
                            </div>
                        <?php  endwhile ?>
                    
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
                                   <div class="button_des_emp_index"> <button type="button"  class="btn btn-warning"  data-toggle="modal" data-target="#resevation" onclick="reserv('<?php echo $row3['id_ch'];?>');" >reserver une visite</button> </div>
                                   <a data-toggle="modal" href="#<?=$row3['id_ch'];?>" >
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play-fill" viewBox="0 0 16 16">
                                         <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                      </svg>
                                      <img src="images/house.jpg" class="img-fluid" alt=""/> 
                                      <div class="alert_img">regarder toutes les images</div> 
                                   </a> 
                                </div>
                                <div style=" border:1px solid #f8f9fa  ; border-radius: 0px 0px 5px 5px; background-color: #d7dbdf ; " class="con_des_emp">
                                        <div><h2><u>CHAMBRE NO</u>: <?php echo $row3['id_ch'];?> </h2></div>
                                        <hr>
                                        <div> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                           <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                           <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                                           </svg></span> <span> <?php echo $row3['prix'];?>fcfa</span> <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                                           <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
                                           </svg><span> <?php echo $row3['superficie'];?> M2</span></span>
                                        </div>  
                                </div>
                              </div>
                            </div>
                            <?php endwhile ?>
                        </div>
                        <a class="up nav-link js-scroll-trigger active" href="#entete" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                               <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                            </svg>
                        </a>
                    </div> 
                     
                    <?php endwhile ?>
                <!--- fin contenu des residences-----> 
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container-fluid">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">toute l'équipe </h2>
                    <h3 class="section-subheading text-muted">Nous sommes tous des étudiants à UCAC-ICAM </h3>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-4a">
                        <div class="team-member">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-4a">
                        <div class="team-member">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-4a">
                        <div class="team-member">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact</h2>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="NOM *" required="required" data-validation-required-message="entrer votre nom" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="entrer votre addresse mail" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="NUMERO TELEPHONE*" required="required" data-validation-required-message="entrer votre numero de telephone" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="votre message *" required="required" data-validation-required-message="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
            <a class="up nav-link js-scroll-trigger active" href="#entete" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
             </svg>
            </a>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">ASSAKO FLORENT JUNIOR 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <?php 
                         //popup contenu residence
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
                            <li data-target="#carouselExampleIndicators<?=$rowpopup1['id_ap']?>" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators<?=$rowpopup1['id_ap']?>" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators<?=$rowpopup1['id_ap']?>" data-slide-to="2"></li>
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
                     <div> <p><?=$rowpopup1['descript']?></p> </div>
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
                            <li data-target="#carouselExampleIndicators<?=$rowpopup2['id_ch']?>" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators<?=$rowpopup2['id_ch']?>" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators<?=$rowpopup2['id_ch']?>" data-slide-to="2"></li>
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
                     <div> <p><?=$rowpopup2['descript']?></p> </div>
                     <button style=" margin:6px;" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close" >FERMER</button>
                   </div>
                </div>
            </div>
        </div>
        <?php endwhile ?>
      <?php endwhile ?>
        <!--- fin---->
        <!-----popup reservation----->
        <div class="modal fade" id="resevation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">faite une reservation en renseignant les informations demandées</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="crud.php" method="post">
                    <div class="modal-body">
                            <div class="form-group">
                                     <label> Nom</label>
                                     <input type="text" name="nom_clients" class="form-control" placeholder="EX: ASSAKO " required>
                                     <input type="hidden" name="reservation" value="" id="reservp">
                            </div>
                            <div class="form-group">
                                     <label> Prenom</label>
                                     <input type="text" name="prenom_clients" class="form-control" placeholder="EX: Florent" required>
                            </div>
                            <div class="form-group">
                                     <label> Email</label>
                                     <input type="email" name="mail_clients" class="form-control" placeholder="EX: ex@exemple.com" required>
                            </div>
                            <div class="form-group">
                                     <label>TEL</label>
                                     <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
                            </div>
                            <div class="form-group">
                                     <label> adresse</label>
                                     <input type="text" name="ville_clients" class="form-control" placeholder="EX: Douale DOKOTI" required>
                            </div>
                            <div class="form-group">
                                     <label> Date</label>
                                     <input type="date" name="rdv" class="form-control" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <input type="submit" name="form_reserv" value="Envoyer">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">

          // fonction pour faire des reservation
          function reserv(matricule)
            {
             $('#reservp').val(matricule);
            }
        </script>
        <!-----fin popup reservation------->
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
    </body>
</html>

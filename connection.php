<?php 
 if(isset($_GET['login'])){
    $err1 = htmlspecialchars($_GET['login']);
	 switch($err1)
	 {
		 case 'password';
		 ?>
		    <div class="animate__animated animate__fadeInDownBig animate__delay-0.4s container" id="errz2" >
			   <div class="text-center"> <h4>erreur<button type="button" class="btn btn-secondary btn-sm" id="frm1" >&times;</button></h4> </div>
               <div class="tc"> une erreur c'est produite le mot de passe est incorrect</div>
			</div>
		<?php
		break;
		case 'matricule';
		?>
		    <div class="animate__animated animate__fadeInDownBig animate__delay-0.4s container" id="errz2" >
			   <div class="text-center"> <h4>erreur<button type="button" class="btn btn-secondary btn-sm">&times;</button></h4> </div>
               <div class="tc"> une erreur c'est produite le matricule est incorrect</div>
			</div>
        <?php
		break;
		case'ad-erreur';
		?>
		    <div class="animate__animated animate__fadeInDownBig animate__delay-0.4s container" id="errz2" >
			   <div class="text-center"> <h4>erreur<button type="button" class="btn btn-secondary btn-sm">&times;</button></h4> </div>
               <div class="tc">vous devez vous connectez pour avoir access</div>
			</div>
		<?php
   }
}
	   ?>

<!doctype html>
<html lang="fr">
  <head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="site agence immobilier" />
	<meta name="author" content="assako florent" />
	<title>MOUDIHOUSE-CONNEXION</title>
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">connection à la page admin</h3>
		      	<form action="connexion_traittement.php" method="post"  class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="matricule" class="form-control" placeholder="Matricule" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">se souvenir de moi
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">mots de passe oublier</a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/scripts.js"></script>
	</body>
</html>


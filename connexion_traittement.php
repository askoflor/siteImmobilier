<?php
   session_start();
   try
   {
       $bdd = new PDO("mysql:host=localhost;dbname=immobilier;charset=utf8" , "root" ,"");

   }
   catch(Exeption $e)
   {
       die('Erreur : ' .$e->getMessage("une erreur s'est produit"));
   }

   if(isset($_POST['matricule']) && isset($_POST['password'])){
      
    $matricule = htmlspecialchars($_POST['matricule']);
    $password = htmlspecialchars($_POST['password']);

    $check = $bdd->prepare('SELECT matricule , password FROM administrateur WHERE matricule = ?');
    $check->execute(array($matricule));
    $data = $check->fetch();
    $row = $check->rowCount();

     if($row == 1){
        if($data['password'] === $password){
            header('location: /moudihouse/admin.php?start='.$matricule);
            die();
        }
        else{
          header('Location: connection.php?login=password');
          die();
        }
    }
    else{
        header('Location: connection.php?login=matricule');
        die();
    }
   }

?>
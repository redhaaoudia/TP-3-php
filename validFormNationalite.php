<?php include "header.php";
  include "connexionPDO.php";
  $action=$_GET['action'];
  $num=$_POST['num']; //je récupere le libellé du formulaire
  $libelle=$_POST['libelle']; 

  if($action == "Modifier"){
    $req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
    $req->bindParam(':libelle',$libelle);
    $req->bindParam(':num',$num);
    $nb=$req->execute();
    
  }else {
    $req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
  $req->bindParam(':libelle',$libelle);

  }
  $nb=$req->execute();
  $message=$action == "Modifier" ? "modifiée" : "ajoutée" ;

  

?>



<main role="main">

<div class="container mt-5">
<div class="row">
    <div class="col mt-3 pt-3"></div>
</div>


<?php 



  if ($nb ==1 ){
      echo '<div class="alert alert-success" role="alert">
      la nationalité a bien été '.$message.' 
      </div>';
      
      }
      else {
        echo '<div class="alert alert-success" role="alert">
        la nationalité n\'a pas été'. $message.'  
        </div>';
  }

  ?>



</div>

  
</main>

<?php include "footer.php";


?>


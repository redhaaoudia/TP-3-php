<?php include "header.php";
  include "connexionPDO.php";
  $num=$_GET['num'];
  $req=$monPdo->prepare("delete from nationalite  where num = :num");
  $req->bindParam(':num',$num);
  $nb=$req->execute();
    
  
 
  

  

?>



<main role="main">

<div class="container mt-5">
<div class="row">
    <div class="col mt-3 pt-3"></div>
</div>


<?php 



  if ($nb == 1 ){
      echo '<div class="alert alert-success" role="alert">
      la nationalité a bien été supprimé 
      </div>';
      
      }
      else {
        echo '<div class="alert alert-success" role="alert">
        la nationalité n\'a pas été supprimé
        </div>';
  }

  ?>

<div class="col"><a href="listeNationalites.php" class="btn btn-warning btn-block">Revenir a la liste</a></div>


</div>

  
</main>

<?php include "footer.php";


?>


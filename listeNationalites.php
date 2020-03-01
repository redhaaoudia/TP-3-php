<?php include "header.php";
  include "connexionPDO.php";
  $req=$monPdo->prepare("select * from nationalite");
  $req->setFetchMode(PDO::FETCH_OBJ);
  $req->execute();
  $lesNationalites=$req->fetchAll();

?>



<main role="main">

<div class="container mt-5">

<div class="row pt-3"> 
<div class="col-9"><h2>Liste des nationalites</h2></div>
<div class="col -3"><a href="formNationalite.php?action=Ajouter" class='btn btn-success'><i class="fas fa-plus-circle"></i> Crée une nationalité</a></div>
</div>

<table class="table table-hover table-striped">
  <thead>
    <tr class='d-flex'>
      <th scope="col"class='col-md-2'>Numéro</th>
      <th scope="col" class='col-md-8'>Libellé</th>
      <th scope="col"class='col-md-2'>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($lesNationalites as $nationalite){
    echo "<tr class='d-flex'>";
    echo "<td class='col-md-2'>$nationalite->num</td>";
    echo "<td class='col-md-8'>$nationalite->libelle</td>";
    echo "<td class='col-md-2'>
    <a href='formNationalite.php?action=Modifier&num=$nationalite->num ' class='btn btn-primary'><i class='fas fa-pen'></i></a>
    <a href='#modalsup'  data-suppression='supprimeNationalite.php?num=$nationalite->num' date-message='Voulez vous supprimer cette nationalités ?' data-toggle='modal' class='btn btn-primary'><i class='far fa-trash-alt'></i></a>
    </td>";
   
  echo "</tr>";

  }
  //supprimeNationalite.php?num=$nationalite->num
   
  ?>
   
   
  </tbody>
</table>






</div>

  
</main>




<?php include "footer.php";


?>


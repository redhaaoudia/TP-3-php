<?php include "header.php";

    $action=$_GET['action']; //soir Ajouter soit modifer
    if($action == "Modifier"){
    include "connexionPDO.php";
    $num=$_GET['num'];
    $req=$monPdo->prepare("select * from nationalite where num= :num");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req->bindParam(':num',$num);
    $req->execute();
    $laNationalite=$req->fetch();
     
    }

?>



<main role="main">

<div class="container mt-5">

<h2 class="pt-5 text-center"><?php echo $action ?> une nationalités</h2>
<form action="validFormNationalite.php?action=<?php echo $action ?>" method="post" class="col-md-6 offset-md-3">
<div class="form-group">

<label for="libelle">Libellé </label>
<input type='text' class='form-control' id='libelle' placehoder='Saisir une nationalité' name='libelle' value="<?php  if($action == "Modifier") {echo $laNationalite->libelle;}  ?>">


</div>
<input type="hidden" id="num" name="num" value= "<?php  if($action =="Modifier") {echo $laNationalite->num;} ?>">
<div class="row">
<div class="col"><a href="listeNationalites.php" class="btn btn-warning btn-block">Revenir a la liste</a></div>
<div class="col"><button type="submit" class="btn btn-success btn-block"><?php echo $action ?> </button></div>
</div>

</form>




 </div> 
</main>

<?php include "footer.php";


?>


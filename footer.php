 
<!-- Début de la Modal-->
<div id="modalsup" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Comfirmation de suppression</h5>
        
      </div>
      <div class="modal-body">
        <p>Voulez vous supprimer cette nationalités ?</p>
      </div>
      <div class="modal-footer">
        <a id="btnSuppr" href="" class="btn btn-primary">Supprimer </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ne pas supprimer</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin de la Modal-->

<footer class="container">
  <p>&copy; Redha 2019-2020</p>
</footer>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">

$("a[data-suppression]").click(function(){

var lien = $(this).attr("data-suppression"); // Ont récupère le lien du bouton supprimer
var message = $(this).attr("data-message");
$("#btnSuppr").attr("href",lien); // ont écrit ce lien sur le boutton supprimer
$(".modal-body").text(message);
console.log(lien);


})

</script>
</body>
</html>
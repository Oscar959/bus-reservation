<?php
session_start();
require("../../controllers/admin/checking_sessions.php");
foreach ($sessions as $row) {
  $id = $row['id'];
  $nom = $row['nom'];
  $prenom = $row['prenom'];
  $photo = $row['photo'];
}

// rédurectionner à NavBar-------------------------
require("nav.php");
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Les voyages</h5>
            <p>Listes des tous les voyages disponibles</p>

            <!-- Table with stripped rows -->
            <table class="table table-responsive table-hover table-striped table-bordered ">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nombre de Passagés</th>
                  <th scope="col">Date Voyage</th>
                  <th scope="col">Date d'arrivée</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Itineraire</th>
                  <th scope="col">Modifier</th>
                  <th scope="col">Supprimer</th>
                </tr>
              </thead>
              <tbody id="tbody">

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">Changez votre profil</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body text-secondary">
        <form id="formBd" enctype="multipart/form-data" class="modal-body-form-content">


        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="submit" data-dismiss="modal">Quitter</button>
      </div>
    </div>
  </div>
</div>







<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php
require("footer.php");
?>
<script>
  $(document).ready(function() {
    function voyageDisponible() {
      var voyageDispo = "voyage";
      $.ajax({
        url: "../../controllers/admin/voyage_disponible.php",
        method: "POST",
        data: {
          voyageDispo: voyageDispo
        },
        success: function(response) {
          $("#tbody").html(response);
        }
      })

    }
    // appeler la fonnction qui affiche les donnees du tableau
    voyageDisponible();

    //suppression de la donnée dans la base des donnees
    $(document).on("click", ".btn-click", function() {
      var id = $(this).attr("id");

      //$("#myModal").modal("show");
      //alert(nom);

      $.ajax({
        url: "../../controllers/admin/voyage_disponible.php",
        method: "POST",
        data: {
          id: id
        },
        beforeSend: function() {
          return confirm("Voulez-vous vraiment Supprimer?")
        },
        success: function(response) {
          //display current element in db instantly
          voyageDisponible();
        }
      })
    })


    //update de la donnée dans la base des donnees
    $(document).on("click", ".btn-update", function() {
      var id_voyage = $(this).attr("id");
      //
      //alert(id_voyage);

      $.ajax({
        url: "../../controllers/admin/voyage_disponible.php",
        method: "POST",
        data: {
          id_voyage: id_voyage,
        },
        success: function(response) {
          $("#formBd").html(response);
          $(".select-itineraire").html("<label for=''>Itineraire</label> <select name='itineraire' id='itineraire' class='form-control itineraire-list'></select>");
          loadItineraire();
          $("#myModal").modal("show");

        }
      })
    })

    function loadItineraire() {
      var itineraireList = "itineraireList";

      $.ajax({
        url: "../../controllers/admin/itineraire.php",
        method: "POST",
        data: {
          itineraireList: itineraireList
        },
        success: function(data) {
          //html method displays html content in the html document
          $(".itineraire-list").html(data);
          //console.log(data)
        }
      })
    }



    $(document).on("submit", "#formBd", function(e) {
      e.preventDefault();

      var nombrePassager = $("#nombrePassager").val();
      var prix = $("#prix").val();
      var idVyg = $("#idVyg").val();
      var dateVoyage = $("#dateVoyage").val();
      var dateArrivee = $("#dateArrive").val();
      var itineraire = $("#itineraire").val();
    
      $.ajax({
        url: "../../controllers/admin/voyage_disponible.php",
        method: "POST",
        data: {
          nombrePassager: nombrePassager,
          prix: prix,
          idVyg:idVyg,
          dateArrivee: dateArrivee,
          dateVoyage: dateVoyage,
          itineraire: itineraire
        },
        success: function() {
          $("#myModal").modal("hide");
          voyageDisponible();
        }

      })
    })

  })
</script>
</body>







</html>
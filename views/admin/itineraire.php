<?php

session_start();
require("../../controllers/admin/checking_sessions.php");

foreach ($sessions as $row) {
    $id = $row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $photo = $row['photo'];
}

require("nav.php");
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrement Itineraire</h5>

                        <!-- Advanced Form Elements -->
                        <form id="form-itineraire">
                            <div class="row mb-5">
                                <div class="input-group">
                                    <span class="input-group-text">Itineraire</span>
                                    <textarea class="form-control" aria-label="With textarea" id="itineraire" name="itineraire"></textarea>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-secondary">Envoyer</button>
                                </div>
                            </div>

                    </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->

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
    $(document).ready(function(){
        $(document).on("submit","#form-itineraire", function(e){
            e.preventDefault();
            var itineraire = $("#itineraire").val();
            //alert(itineraire);
            $.ajax({
                url:"../../controllers/admin/itineraire.php",
                method:"POST",
                data: {
                    itineraire:itineraire
                },
                beforeSend:function(){
                    return confirm("etes-vous sur d'enregistrer?")
                },
                success:function(){
                    console.log("success");
                }
            })
        })
    })
</script>
</body>

</html>
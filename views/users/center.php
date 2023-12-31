
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Les membres acceptés</title>
    <link href="assets/img/logo.jpeg" rel="icon">
    <link href="assets/img/logo.jpeg" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href='vendor/bootstrap/js/jquery.iphone.toggle.css' rel='stylesheet'>
    <style>
		@media (max-width:991px){
			.responsive{
			 margin:0.3rem;
             border-radius:5px;			 
			}
		}
	</style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      
       <?php include("nav.php")?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter count" ></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
								<div id="dropdown-menu">
									
							    </div>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php //echo $row['name'];?>
								<?php //echo $row['firstname'];?></span> 
                                <?php //echo '<img src="uploads/'.
						           //$row['photo'].'" width="150px;" height="50px;" class="img-profile rounded-circle"; alt="image">'?> 
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
				   <!-- Begin Page Content -->
              

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h4 class="m-0 font-weight-bold text-primary" style="font-style:italic">La liste des tous les membres </h4>
                                </a>
								<div class="card-body">
						 
							<!-- Card Content - Collapse -->
                           <div class="collapse show" id="collapseCardExample">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" style="font-style:italic; text-transform:capitalize;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
											<th>Profession</th>
											<th>Qualité</th>
											<th>Etat</th>
											
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
											<th>Profession</th>
											<th>Qualité</th>
											<th>Etat</th>
											
                                        </tr>
                                    </tfoot>
                                    <tbody id="show" style="text-transform:none;">
																   
                                    </tbody>
                                </table>
                            </div>
						 </div>
                        </div>
                        </div>
                        
                    </div>
					

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-primary">
                        <span>Copyright &copy; Your Website <?php echo date("Y") ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include("lgout.php");?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
	<script src="vendor/bootstrap/js/jquery.iphone.toggle.js"></script>
	<script>
	  $(document).ready(function(){
	   show();
	   function show() {
		$.ajax({
			url:"acc.php",
			method:"POST",
			success:function(data){
				$("#show").html(data);
			}
		});
		
      }
	  
     $(document).on('click', '.supprimer', function(){
		 var id=$(this).attr("id");
		 $.ajax({
			 url:"supprimer.php",
			 type:"POST",
			 data:{id:id},
			 success:function(data){
				 show();
			 }
		 });
	 });
	 
	 $(document).on('click', '.banir', function(){
		 var id=$(this).attr("id");
		 $.ajax({
			 url:"banir.php",
			 type:"POST",
			 data:{id:id},
			 success:function(data){
				 show();
			 }
		 });
	 });
	    connect_select();  
		function connect_select(){
			var action= "fetch";
			//alert(action);
			$.ajax({
				url:"connect_select.php",
				method:"POST",
				data:{action:action},
				dataType:"json",
				success:function(data){
				   $("#good").show("slow");
				   $("#good").html(data.notification);
                   if(data.unseen_notification > 0){
					 $('.counter_connected').html(data.unseen_notification);
			     }				   
				}
			});
		}
	 $(document).on('click', '.rejected', function(){
		 var id=$(this).attr("id");
		 $.ajax({
			 url:"rejected.php",
			 type:"POST",
			 data:{id:id},
			 success:function(data){
				 ;
			 }
		 });
	 });
	 
	 setInterval(function(){
		show()  
	  },2000);
	  
	   function load_unseen_notification(view=''){
		 $.ajax({
			 url:"fetch.php",
			 method:"POST",
			 data:{view:view},
			 dataType:"json",
			 success:function(data){
				 $('#dropdown-menu').html(data.notification);
				 if(data.unseen_notification > 0){
					 $('.count').html(data.unseen_notification);
				     var audio = new Audio("audio/fais_dodo.mp3");
				     audio.play();
					 setTimeout(function(){
						audio.pause();
						audio.currentTime=0;
					},10000);
			 }
		   }
		 });
	  }
	  load_unseen_notification();
	  
	  $(document).on('click', '.dropdown-toggle', function(){
		 $('.count').html('');
		 load_unseen_notification('yes');
	  });
	  setInterval(function(){
		load_unseen_notification()  
	  },1000);
	  
	  });
	
	</script>

</body>

</html>

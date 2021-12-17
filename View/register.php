
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
              <h6 class="fw-light">create an account.</h6>
              <form action="ajouterUser.php" method="POST" class="forms-sample">
            <div class="form-group"><label for="username">Nom d'utilisateur:</label>  
                    <input type="text" name="username" > </div>


                    <div class="form-group"><label for="email">email:</label>  
                    <input type="text" name="email" > </div>

                    <div class="form-group"><label for="password">password:</label>  
                    <input type="password" name="password" > </div>


                    <div class="form-group"><label for="type">type</label>  
                    <input type="text" name="type" > </div>


                    <div class="form-group"><label for="numerotele">num telephone:</label>  
                    <input type="text" name="numerotele" > </div>


                    <div class="form-group"><label for="nationalite">nationalite :</label>  
                    <input type="text" name="nationalite" > </div>


                    <div class="form-group"><label for="sexe">sexe:</label>  
                    <input type="text" name="sexe" > </div>
                
                    <div class="form-group"><label for="etat">etat:</label>  
                    <input type="text" name="etat" > </div>
                    <button type="submit" class="btn btn-dark btn-icon-text">
                          sign up
                          <i class="ti-file btn-icon-append"></i>                          
                        </button>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>

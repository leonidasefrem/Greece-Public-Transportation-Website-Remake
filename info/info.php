<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ΟΑΣΑ-Συγκοινωνίες Αθηνών</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap2.min.css" rel="stylesheet">

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/all.css" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <link href="../css/jquery-ui.css" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>


  <!-- Javascript -->
  <script>
    $(function () {
      var locations = [
        "ΤΖΙΤΖΙΦΕΣ",
        "ΝΕΟΣ ΚΟΣΜΟΣ",
        "ΑΜΠΕΛΟΚΗΠΟΙ",
        "ΨΥΧΙΚΟ",
        "ΧΑΛΑΝΔΡΙ",
        "ΦΑΛΗΡΟ",
        "ΚΗΦΙΣΙΑ",
        "ΒΙΚΤΩΡΙΑ",
        "ΕΘΝΙΚΗ ΑΜΥΝΑ",
        "ΧΟΛΑΡΓΟΣ",
        "ΑΓΙΑ ΠΑΡΑΣΚΕΥΗ",
      ];
      $("#automplete-1").autocomplete({
        source: locations,
        autoFocus:true
      });
      $("#automplete-2").autocomplete({
        source: locations,
        autoFocus:true
      });
    });
  </script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
    <div class="navbar-collapse collapse w-100 order-0 dual-collapse2 ">
      <ul class="navbar-nav mr-auto  ">
        <li class="nav-item">
          <a class="logo navbar-btn" href="../index.php">
            <img src="../img/oasa_logo.png" width="130" height="40" alt="">
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-nowrap" href="../index.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Ενημέρωση</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ανακοινώσεις</a>
            <a class="dropdown-item" href="#">Δελτία τύπου</a>
            <a class="dropdown-item" href="#">Εταιρικά Νέα</a>
            <a class="dropdown-item" href="#">Έργα-Προμήθειες</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Για τον επιβάτη</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../routes/anazitisi_dromologiou.php">Αναζήτηση Δρομολογίου</a>
          <a class="dropdown-item" href="#">Στάσεις</a>
            <a class="dropdown-item" href="#">Δήλωση Απολεσθέντων</a>
            <a class="dropdown-item" href="#">Σημεία Επαναφόρτησης Ηλεκτρονικών Εισιτηρίων</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">ΑμεΑ</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Γενικές Οδηγίες για ΑμεΑ</a>
            <a class="dropdown-item" href="#">Στάσεις με προεξοχές</a>
            <a class="dropdown-item" href="#">Οδηγίες προσέγγισης στα Μ.Μ.Μ</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Για Επαγγελματίες</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Μεταπωλητές Εισιτηρίων</a>
            <a class="dropdown-item" href="#">Εμπορική Εκμετάλευση</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Εισιτήρια</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="agora_isit/agora_isit_1.php">Επαναφόρτιση ηλεκτρονικού εισιτηρίου</a>
            <a class="dropdown-item" href="#">Τιμές Εισιτηρίων</a>
            <a class="dropdown-item" href="#">Έκδοση Κάρτας</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Επικοινωνία</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Τηλέφωνα Επικοινωνίας</a>
            <a class="dropdown-item" href="#">Επικοινωνία μέσω email</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Υποβολή Παραπόνων</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">Βοήθεια</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Συχνές Ερωτήσεις</a>
         <a class="dropdown-item" href="#">Σύνδεσμοι</a>

          </div>
        </li>
        <?php  if(isset($_SESSION['email']) && isset($_SESSION['psw'])){
          echo ' <li class="nav-item dropdown">
          <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" href="#">' . $_SESSION['email'] . '</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../login/account_settings.php">Επεξεργασία Λογαρισμού</a>
            <a class="dropdown-item" href="../login/logout.php">Αποσύνδεση</a>
          </div>
        </li>';}
       else{
      echo'<li class="nav-item">
        <a class="nav-link text-nowrap" href="login/login.php">Σύνδεση</a>
        </li>';
       } 
           ?>
           
      </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <form class="form-inline active-cyan-3 active-cyan-4">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                aria-label="Search">
            </form>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container  ">

    <!-- Heading Row -->
    <div class="row align-items-center my-5 jumbotron ">
      <div class="col">
       <h1>Lorem Ipsum</h1>
       <hr>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus mauris a diam maecenas. Venenatis lectus magna fringilla urna porttitor. Arcu cursus euismod quis viverra nibh cras pulvinar mattis. Commodo elit at imperdiet dui accumsan. Purus sit amet luctus venenatis lectus magna fringilla. Vivamus at augue eget arcu dictum varius duis at consectetur. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Aenean pharetra magna ac placerat vestibulum. Habitant morbi tristique senectus et netus.

Elementum eu facilisis sed odio morbi quis commodo. Egestas maecenas pharetra convallis posuere morbi leo urna. Odio tempor orci dapibus ultrices in iaculis. Tortor condimentum lacinia quis vel eros donec ac. Nisi quis eleifend quam adipiscing. Mauris nunc congue nisi vitae suscipit tellus. Arcu risus quis varius quam quisque id diam vel quam. Eget gravida cum sociis natoque penatibus. Dignissim convallis aenean et tortor at risus. Mauris augue neque gravida in fermentum et sollicitudin ac orci. Neque volutpat ac tincidunt vitae semper. Et malesuada fames ac turpis. Molestie nunc non blandit massa enim. Mauris cursus mattis molestie a iaculis at. Imperdiet sed euismod nisi porta lorem mollis aliquam. Ullamcorper morbi tincidunt ornare massa eget egestas purus. Vitae auctor eu augue ut lectus arcu bibendum. Orci phasellus egestas tellus rutrum. Dictum fusce ut placerat orci nulla pellentesque dignissim enim. Ante in nibh mauris cursus.

Etiam tempor orci eu lobortis elementum nibh. Ut tellus elementum sagittis vitae et leo. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem. Etiam tempor orci eu lobortis elementum nibh tellus. Adipiscing diam donec adipiscing tristique. Duis ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Quisque non tellus orci ac auctor augue. Scelerisque mauris pellentesque pulvinar pellentesque. Tortor dignissim convallis aenean et tortor. Nulla at volutpat diam ut venenatis. Volutpat sed cras ornare arcu dui vivamus arcu felis. Placerat in egestas erat imperdiet sed euismod nisi. Nibh mauris cursus mattis molestie a. Quisque non tellus orci ac auctor. Proin libero nunc consequat interdum varius sit amet mattis. Condimentum id venenatis a condimentum vitae sapien pellentesque habitant morbi. Aenean euismod elementum nisi quis eleifend. Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Dignissim convallis aenean et tortor at risus.

Nec feugiat nisl pretium fusce id velit ut tortor pretium. Aenean sed adipiscing diam donec. Nunc sed velit dignissim sodales ut eu sem integer vitae. Pharetra convallis posuere morbi leo urna. Est ullamcorper eget nulla facilisi etiam dignissim diam quis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Commodo viverra maecenas accumsan lacus vel facilisis volutpat. Sit amet consectetur adipiscing elit ut. Sed libero enim sed faucibus turpis in eu mi. Morbi tristique senectus et netus et malesuada fames. Dignissim enim sit amet venenatis urna cursus eget nunc. Donec enim diam vulputate ut pharetra sit amet aliquam. Potenti nullam ac tortor vitae purus. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Ut tortor pretium viverra suspendisse potenti nullam ac. Duis convallis convallis tellus id.

Eget sit amet tellus cras adipiscing enim eu turpis. Sed cras ornare arcu dui vivamus arcu. Consectetur adipiscing elit ut aliquam. Scelerisque in dictum non consectetur a. Posuere lorem ipsum dolor sit amet. Tellus mauris a diam maecenas sed enim. Turpis tincidunt id aliquet risus feugiat in ante. Volutpat blandit aliquam etiam erat velit scelerisque in dictum non. Accumsan in nisl nisi scelerisque. Aliquam faucibus purus in massa tempor nec. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sed cras ornare arcu dui vivamus arcu felis. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Libero id faucibus nisl tincidunt eget nullam non. Malesuada fames ac turpis egestas sed tempus. Sit amet dictum sit amet justo donec enim diam. Faucibus purus in massa tempor nec feugiat. Ultrices sagittis orci a scelerisque.
      </div>
      <!-- /.col-md-4 -->
    </div>


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <!-- Footer -->
  <footer class="footer font-small indigo bg-dark " style="z-index:0">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold mt-3 text-secondary">Πληροφορίες</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Ιστορία ΟΑΣΑ</a>
            </li>
            <li>
              <a href="#!">Διοικητική Δομή</a>
            </li>
            <li>
              <a href="#!">Εταιρίες Ομίλου</a>
            </li>
            <li>
              <a href="#!">Εμπορική Εκμετάλευση</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold mt-3 text-secondary ">Δράσεις</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Οδική Ασφάλεια</a>
            </li>
            <li>
              <a href="#!">Περιβαλλοντική Πολιτική</a>
            </li>
            <li>
              <a href="#!">ΕΣΠΑ 2007-2013</a>
            </li>

          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold mt-3 text-secondary ">Άλλα</h5>

          <ul class="list-unstyled ">
            <li>
              <a href="#!">Ερωτηματολόγιο ικανοποίησης</a>
            </li>
            <li>
              <a href="#!">Πρόσληψη Προσοπικού</a>
            </li>
            <li>
              <a href="#!">Όροι χρήσης</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold mt-3 text-secondary">&nbsp&nbspSocial Media</h5>

          <ul class="list-unstyled">
            <li>
              <a class="btn-floating btn-lg btn-fb " href="#" type="button" role="button"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn-floating btn-lg btn-ins" href="#" type="button" role="button"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn-floating btn-lg btn-li" href="#" type="button" role="button"><i
                  class="fab fa-linkedin-in"></i></a>
              <a class="btn-floating btn-lg btn-yt" href="#" type="button" role="button"><i
                  class="fab fa-youtube"></i></a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->

  <!-- Bootstrap core JavaScript -->

  <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>
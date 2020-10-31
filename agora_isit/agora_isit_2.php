<?php
    session_start();
    if(isset($_GET['options'])&& isset($_GET['ticketnum'])){
        $_SESSION['options'] = $_GET['options'];
        $_SESSION['ticketnum'] = $_GET['ticketnum'];
     
    }
            if(!empty($_SESSION['email']) && !empty($_SESSION['psw'])){
            header("Location:agora_isit_3_login.php"); 
            }
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
<script type="../text/javascript" src="js/jquery-3.4.1.min.js"></script>
<link href="../css/jquery-ui.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../s/jquery-ui.js"></script>


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
                autoFocus: true
            });
            $("#automplete-2").autocomplete({
                source: locations,
                autoFocus: true
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
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Ενημέρωση</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../info/info.php">Ανακοινώσεις</a>
                        <a class="dropdown-item" href="../info/info.php">Δελτία τύπου</a>
                        <a class="dropdown-item" href="../info/info.php">Εταιρικά Νέα</a>
                        <a class="dropdown-item" href="../info/info.php">Έργα-Προμήθειες</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Για τον επιβάτη</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../routes/anazitisi_dromologiou.php">Αναζήτηση Δρομολογίου</a>
                        <a class="dropdown-item" href="../info/info.php">Στάσεις</a>
                        <a class="dropdown-item" href="../info/info.php">Δήλωση Απολεσθέντων</a>
                        <a class="dropdown-item" href="../info/info.php">Σημεία Επαναφόρτησης Ηλεκτρονικών Εισιτηρίων</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">ΑμεΑ</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../info/info.php">Γενικές Οδηγίες για ΑμεΑ</a>
                        <a class="dropdown-item" href="../info/info.php">Στάσεις με προεξοχές</a>
                        <a class="dropdown-item" href="../info/info.php">Οδηγίες προσέγγισης στα Μ.Μ.Μ</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Για Επαγγελματίες</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../info/info.php">Μεταπωλητές Εισιτηρίων</a>
                        <a class="dropdown-item" href="../info/info.php">Εμπορική Εκμετάλευση</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Εισιτήρια</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../agora_isit/agora_isit_1.php">Επαναφόρτιση ηλεκτρονικού εισιτηρίου</a>
                        <a class="dropdown-item" href="../info/info.php">Τιμές Εισιτηρίων</a>
                        <a class="dropdown-item" href="../info/info.php">Έκδοση Κάρτας</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Επικοινωνία</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../info/info.php">Τηλέφωνα Επικοινωνίας</a>
                        <a class="dropdown-item" href="../info/info.php">Επικοινωνία μέσω email</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../info/info.php">Υποβολή Παραπόνων</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-nowrap dropdown-toggle" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Βοήθεια</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../info/info.php">Συχνές Ερωτήσεις</a>
                         <a class="dropdown-item" href="../info/info.php">Σύνδεσμοι</a>

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
        <a class="nav-link text-nowrap" href="../login/login.php">Σύνδεση</a>
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
    <!-- Page Content -->
    <div class="container ">
        <!-- Heading Row -->
        <div class="row bs-wizard align-center jumbotron" style="border-bottom:0;">
            <div class="col-lg-3 bs-wizard-step complete ">
                <div class="text-center bs-wizard-stepnum ">Βήμα 1</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="javascript:history.back()" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center ">Επιλογή Κομίστρου</div>
            </div>
            <div class="col-lg-3 bs-wizard-step active">
                <!-- complete -->
                <div class="text-center bs-wizard-stepnum">Βήμα 2</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">Εισαγωγή αριθμού κάρτας</div>
            </div>

            <div class="col-lg-3 bs-wizard-step disabled">
                <!-- complete -->
                <div class="text-center bs-wizard-stepnum">Βήμα 3</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">Πληρωμή</div>
            </div>
            <div class="col-lg-3 bs-wizard-step disabled">
              <!-- complete -->
              <div class="text-center bs-wizard-stepnum">Βήμα 4</div>
              <div class="progress">
                  <div class="progress-bar"></div>
              </div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Ολοκλήρωση αγοράς εισιτηρίου</div>
          </div>
        
        </div>
        <div class="container form-group jumbotron">
        
                <div class="row">
                    <div class="col-lg-4">
                        <div>
                                <form method="get" id="form1" action="agora_isit_3.php">
                            <h5> Εισάγετε τον αριθμό της κάρτας</h5>
                            <hr>
                            <input type="text" name="idcard" class="form-control" id="AthenaCardNum"  autocomplete="off" placeholder="XXXX XXXX XXXX XXXX">
                            <small class="form-text text-muted">Ο αριθμός κάρτας βρίσκετε στο κάτω αριστερό μερος της καρτας οπώς φένεται στην παρακάτω φωτογραφία</small>
                            </form>
                        </div>
                    </div>
                    <div class="col-4"></div>
            <div class="col-4">
                <form method="post" action="agora_isit_3_login.php">
                    <div>
                            <h5> Ή αν έχεται λογαρισμό συνδεθήτε </h5>
                            <hr>
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                            placeholder="Εισάγεται το email σας">
                    </div>
                    <div>
                        <label for="exampleInputPassword1">Κωδικός</label>
                        <input type="password" class="form-control" id="psw" name="psw"
                            placeholder="Εισάγεται τον Κωδικό σας">
                    </div>
                    <small id="emailHelp" class="form-text text-muted"><a href="../login/register.php">Δημιουργία
                        Λογαρισμού</a></small>
                    <button type="submit" class="btn btn-primary">Σύνδεση</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                    <img src="../img/athenacard.png" alt="athenacard" style=" width:60%; height:60%">
                    <small class="form-text text-muted">Ο αριθμός της κάρτας είναι κυκλομένος με κόκκινο χρώμα στην φωτογραφία</small>
                </div>
                    <div class="col " style="padding-top: 200px;">
                <button form="form1" type="submit" style="float: right;   width:200px;"
                    class="btn btn-success">Συνέχεια</button>
            </div>
    
        </div>
  </div>
        <!-- /.col-md-4 -->
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
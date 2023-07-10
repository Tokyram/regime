<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slidebar.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url()?>assets/demo/demo.css" rel="stylesheet" />
    <title>Page avec Slidebar</title>
    <style>
       
    </style>
</head>
<body>
    <div class="sidebar">

        <h1>DASHBOARD</h1>

        <ul>
            <li><a href="#section1" class="sidebar-link">VALIDATION</a></li>
            <li><a href="#section2" class="sidebar-link">ACTIVITE</a></li>
            <li><a href="#section3" class="sidebar-link">CHART</a></li>
        </ul>
    </div>

    <div class="content" id="section1">

        <div class="valide">
        <div class="cardcode"> 
            <!-- <button class="dismiss" type="button">×</button>  -->
            <div class="header"> 
              <div class="image">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div> 
                <div class="contentee">
                   <span class="title">CODE</span> 
                   <p class="message">1 000 000Ar</p> 
                   <p class="message"><strong>User</strong> : nom de la personne</p> 
                   </div> 
                   <div class="actions">
                    <a href="#"><button class="history" type="button">VALIDER</button> </a>
                    <a href="#"><button class="track" type="button">REFUSER</button> </a> 
                </div> 
            </div> 
        </div>
  

        <div class="cardcode"> 
            <!-- <button class="dismiss" type="button">×</button>  -->
            <div class="header"> 
              <div class="image">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div> 
                <div class="contentee">
                   <span class="title">CODE</span> 
                   <p class="message">1 000 000Ar</p> 
                   <p class="message"><strong>User</strong> : nom de la personne</p> 

                   </div> 
                   <div class="actions">
                      <a href="#"><button class="history" type="button">VALIDER</button> </a>
                      <a href="#"><button class="track" type="button">REFUSER</button> </a>
                </div> 
            </div> 
        </div>
    </div>
    </div>

    <div class="content" id="section2">
    <div class="form-container">
            <div class="logo-container">
              NOUVELLE ACTIVITER
            </div>
      
            <form class="form" method="get" action="">
              <div class="form-group">
                <label for="email">Type activier</label>
                <select  type="text" id="email" name="select" required="">
                    <option value=""></option>
                </select>
                <!-- <input type="text" id="email" name="email" placeholder="Enter your email" required=""> -->
              </div>
              <div class="form-group">
                <label for="email">Nom activiter</label>
                <input type="text" id="nom" name="nom" placeholder="nom d'activiter" required="">
              </div>
              <div class="form-group">
                <label for="email">Resultat</label>
                <input type="number" id="resultat" name="resultat" placeholder="resultat" required="">
              </div>
              <div class="form-group">
                <label for="email">Frequence</label>
                <input type="number" id="frequence" name="frequence" placeholder="frequence" required="">
              </div>
              <div class="form-group">
                <label for="email">Montant</label>
                <input type="number" id="montant" name="montant" placeholder="montant" required="">
              </div>
      
              <button class="form-submit-btn" type="submit">VALIDER</button>
            </form>
          </div>
    </div>

    <div class="content" id="section3">
    <div class="wrapper ">
    
    <div class="main-panel">
    
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Poids de la presonne actuelle</p>
                      <p class="card-title">70 kg<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Mettre a jour
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Poids de la presonne avant</p>
                      <p class="card-title">50 kg<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Temps de regime
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Nombre de jours pour l'objectif</p>
                      <p class="card-title">40<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  2h par jours
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Regime suivie de la personne</p>
                      <p class="card-title">Augmentation<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Mettre a jours
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Progression</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
                <canvas id=chartHours width="400" height="100"></canvas>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Email Statistics</h5>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  <i class="fa fa-circle text-primary"></i> Opened
                  <i class="fa fa-circle text-warning"></i> Read
                  <i class="fa fa-circle text-danger"></i> Deleted
                  <i class="fa fa-circle text-gray"></i> Unopened
                </div>
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar"></i> Number of emails sent
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>

    <script>
        var sidebarLinks = document.getElementsByClassName('sidebar-link');
        var contentSections = document.getElementsByClassName('content');

        for (var i = 0; i < sidebarLinks.length; i++) {
            sidebarLinks[i].addEventListener('click', function (event) {
                event.preventDefault();
                var targetId = this.getAttribute('href').substring(1);

                for (var j = 0; j < contentSections.length; j++) {
                    contentSections[j].classList.remove('active');
                }

                var targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.classList.add('active');
                }
            });
        }
    </script>
    <script src="<?php echo base_url()?>assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url()?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url()?>assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      demo.initChartsPages();
    });
  </script>
</body>
</html>

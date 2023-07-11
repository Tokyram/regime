<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slidebar.css">
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


        <?php 
          foreach($notif as $notifs){
            
          

        ?>

        <div class="cardcode"> 
            <!-- <button class="dismiss" type="button">×</button>  -->
            <div class="header"> 
              <div class="image">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div> 
                <div class="contentee">
                   <span class="title"><?php  echo $notifs['code']; ?></span> 
                   <p class="message"><?php  echo $notifs['montant']; ?>Ar</p> 
                   <p class="message"><strong>User</strong> : <?php  echo $notifs['pseudo']; ?></p> 
                   </div> 
                   <div class="actions">
                    <a href="<?php echo base_url() ?>/Main/validercode?idUser=<?php echo $notifs['idUser']; ?>&idCode=<?php echo $notifs['idCode']; ?>"><button class="history" type="button">VALIDER</button> </a>
                    <a href="#"><button class="track" type="button">REFUSER</button> </a> 
                </div> 
            </div> 
        </div>
        <?php 
          }
        ?>

  

        
    </div>
    </div>

    <div class="content" id="section2">
    <div class="form-container" id="myForm">
            <div class="logo-container">
              NOUVELLE ACTIVITER
            </div>
      
            <form class="form" method="get" action="">
              <div class="form-group">
                <label for="email">Type activier</label>
                <select  type="text" id="email" name="idtype" required="">
                    <option value="1">Regime</option>
                    <option value="0">Sport</option>

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
        <h2>Section 3</h2>
        <p>Contenu de la section 3.</p>
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

      document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the form from submitting normally

      var form = event.target;
      var formData = new FormData(form);

      var request = new XMLHttpRequest();
      request.open("POST", "<?php echo base_url() ?>AdminController/addactivite/", true); // Replace with your controller's URL

      request.onreadystatechange = function() {
      if (request.readyState === XMLHttpRequest.DONE) {
        if (request.status === 200) {
          // Request successful
          console.log(request.responsetext);

        } 
       
        else  {
          // Request failed
          console.error("Request failed with status", request.status);
        }
      }
    };

      request.onerror = function() {
        // Handle network errors here
        console.error("Network error");
      };

      request.send(formData);
    });
    </script>


     

    
</body>
</html>

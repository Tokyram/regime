<?php
    // var_dump($suggestion);
    $objectif = $this->input->get("objectif");
    $poids = $this->input->get("poids");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/profil.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

    <title>Profil de personne</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>


<div class="content">
   

        <h2>SUGGESTION</h2>
        <?php 
            foreach($suggestion as $suggestions){

        ?>

        <div class="error" >
          <h3 style="color:white!important;">
            <b>Erreur </b>
          </h3>
        </div>

        <div class="loader" style="margin-top:100px;">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>

        <div class="card">
            
          <div class="header">
              <span class="title"><?php echo $suggestions['nom']; ?></span>
              <!-- <span class="price">Free</span> -->
          </div>
          <!-- <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p> -->
          <ul class="lists">
              <li class="list">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Frequence : <?php echo $suggestions['frequence']; ?></span>
              </li>
              <li class="list">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Poids Unitaire : <?php echo $suggestions['pU']; ?> kg</span>
              </li>
              <li class="list">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Resultat : <?php echo $suggestions['resultat']; ?> kg </span>
              </li>
              <li class="list">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Montant : <?php echo $suggestions['montant']; ?> Ar </span>
              </li>
          </ul>
      </div>
      <?php 
        }
      ?>

      
          <button id="modal-close-btn" class="modal-close-btn">Fermer</button>
          <a href="<?php echo base_url(); ?>ClientController/suggestion?objectif=<?php echo $objectif; ?>&poids=<?php echo $poids; ?>"> <button type="button" class="action" >REGENERER</button></a>
          <a href="#"><button type="button" class="action" onclick="send()" >VALIDER</button></a>
      </div>
  </div>
  </div>   
  <script>
     
    function send(){
        // Example array of data
        var dataArray = <?php echo json_encode($suggestion); ?>;
        var objectif = <?php echo $objectif; ?>

        dataArray.push( objectif);

        var loader = document.getElementsByClassName("loader");
        var error=document.getElementsByClassName('error');
        error[0].classList.remove('active');

        loader[0].classList.add("active-loader");


    // Convert the array to JSON string
    var jsonData = JSON.stringify(dataArray);

    console.log(JSON.parse(jsonData));


    // Create XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the request
    xhr.open('POST', '<?php echo base_url(); ?>ClientController/validregime', true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    // Set up a callback function to handle the response
    xhr.onload = function() {
    loader[0].classList.toggle("active-loader");
    if (xhr.status === 200) {
        // Request successful
        var response = JSON.parse(xhr.responseText);
        if(response.status=="Error")
        {
            var msg = error[0].getElementsByTagName('h3');
            msg[0].innerHTML = response.data;
            error[0].classList.add('active');
            
        }else{
            window.location.href = '<?php echo base_url(); ?>ClientController/accueil';
        }
        console.log(response);
    } else {
        error[0].classList.add('active');
        // Request failed
        console.log('Request failed. Status:', xhr.status);
    }
    };

    // Send the JSON data
    xhr.send(jsonData);
}

  </script>

</body>
</html>

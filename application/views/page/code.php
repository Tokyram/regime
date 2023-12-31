<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form-containers" style="z-index: 0;">
        <div class="logo-container">
          Inserer le code
        </div>

        <div class="error">
          <h3>
            <b>Code non valide</b>
          </h3>
        </div>

        <div class="loader">
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
  
        <form class="form" action=""  id="codeForm">
          <div class="form-group">
            <label for="code">Code</label>
            <input type="text" id="email" name="nomcode" placeholder="Entrer votre code" required="">
          </div>
  
          <button class="form-submit-btn" type="submit">Envoyer le code</button>
        </form>
    </div>

    <script>
      document.getElementById("codeForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the form from submitting normally
      var loader = document.getElementsByClassName("loader");
      var error=document.getElementsByClassName('error');
      error[0].classList.remove('active');

      loader[0].classList.add("active-loader");

      var form = event.target;
      var formData = new FormData(form);

      var request = new XMLHttpRequest();
      request.open("POST", "<?php echo base_url() ?>ClientController/code/", true); // Replace with your controller's URL

      request.onload = function() {
      loader[0].classList.toggle("active-loader");

        if (request.status >= 200 && request.status < 400) {
          var response = JSON.parse(request.responseText);
          if(response.status == "OK")
          {
            window.location.href = "<?php echo base_url() ?>ClientController/accueil";
          }
          else
          {
            error[0].classList.add('active');
          }
          // Handle the successful response here
        } else {
          // Handle errors here
          console.error(request.status);
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
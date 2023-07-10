<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.cssprofil.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

    <title>Profil de personne</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="content" style="background-color: rgba(17, 24, 39, 1); color: #ffffff;">
        <div class="profile">
            <div class="profile-image">
                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="Profile Image">
            </div>
            <div class="profile-info">
                <h2>Nom de la personne</h2>
                <!-- <p>Profession</p>
                <a href="#" class="button">Contacter</a> -->
            </div>
        </div>
        
        <div class="additional-info">
            <h1>INFORMATION </h1>
            <ul>
                <li><strong>Nom:</strong> RAOKOTO JEAN</li>
                <li><strong>Poids:</strong> 60 kg</li>
                <li><strong>Taille:</strong> 1,74 m</li>
                <li><strong>Genre:</strong> Homme</li>
            </ul>
        </div>
        <a href="#"><button type="button" class="action">Nouvelle achat</button></a>
        <a href="#"><button type="button" class="action" style="background-color: #ffffff;">Ajouter Argent</button></a>
        
        <div class="vola">
            <p>1 000 000Ar</p>
        </div>
    </div>
    <div class="content" >
        <h1>SELECTIONNER VOTRE OBJECTIF</h1>
        <p>Veuillez vérifier votre objectif dans cette liste précise afin de vous assurer qu'il est correctement formulé et aligné avec vos attentes.</p>

        <div class="obj">

     
        <label class="cyberpunk-checkbox-label" style="background-color: rgba(167, 139, 250, 1); color: #ffffff; width: 480px;">
            <input class="cyberpunk-checkbox" type="checkbox" onclick="toggleForm('form1')"> REDUIRE LE POIDS
        </label>
        <div class="form-containers">
        <form id="form1" action="" method="get" class="hidden" >
            <div class="form-group">
                <label for="poids1">Poids</label>
                <input type="number" id="poids1" name="poids" placeholder="poids" required="">
              </div>
      
              <button class="form-submit-btn" type="submit">OK</button>
        </form>
        </div>
        <label class="cyberpunk-checkbox-label" style="background-color: rgba(167, 139, 250, 1); color: #ffffff; width: 480px;">
            <input class="cyberpunk-checkbox" type="checkbox" onclick="toggleForm('form2')"> AUGMENTER LE POIDS
        </label>
        <div class="form-containers">
        <form id="form2" action="" method="get" class="hidden">
            <div class="form-group">
                <label for="poids2">Poids</label>
                <input type="number" id="poids2" name="poids" placeholder="poids" required="">
              </div>
      
              <button class="form-submit-btn" type="submit">OK</button>
        </form>
        </div>
    
        <label class="cyberpunk-checkbox-label" style="background-color: rgba(167, 139, 250, 1); color: #ffffff; width: 480px;">
            <input class="cyberpunk-checkbox" type="checkbox" onclick="toggleForm('form3')"> MAINTIENT
        </label>
        <div class="form-containers">
        <form id="form3" action="" method="get" class="hidden">
            <div class="form-group">
                <label for="poids3">Poids</label>
                <input type="number" id="poids3" name="poids" placeholder="poids" required="">
              </div>
      
              <button class="form-submit-btn" type="submit">OK</button>
        </form>
        </div>
        </div>
    </div>

    <div class="content">
        <h1>SUGGESTION DE REGIME</h1>
        <p>Voici la liste des suggestions pour améliorer votre régime alimentaire. Prenez en compte ces recommandations afin d'optimiser votre alimentation et d'adopter de bonnes habitudes pour votre santé.</p>
        <div class="card">
            <div class="header">
                <span class="title">Suggestion 1</span>
                <!-- <span class="price">Free</span> -->
            </div>
            <!-- <p class="desc">Etiam ac convallis enim, eget euismod dolor.</p> -->
            <ul class="lists">
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Aenean quis</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Morbi semper</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
                <li class="list">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Tristique enim nec</span>
                </li>
            </ul>
            <button type="button" class="action">Faire l'achat</button>
        </div>

        <a href="#"><button type="button" class="action" >Ajouter suggestions</button></a>

        
    </div>
    
    <script>
        function toggleForm(formId) {
            var form = document.getElementById(formId);
            form.classList.toggle('hidden');
    
        }

    </script>
</body>
</html>

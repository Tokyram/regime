<?php
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
    <div class="content" style="background-color: rgba(17, 24, 39, 1); color: #ffffff;">
        <div class="profile">
            <div class="profile-image">
                <svg width="80px" height="80px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" fill="#862fc1"></path> <path d="M16.807 19.0112C15.4398 19.9504 13.7841 20.5 12 20.5C10.2159 20.5 8.56023 19.9503 7.193 19.0111C6.58915 18.5963 6.33109 17.8062 6.68219 17.1632C7.41001 15.8302 8.90973 15 12 15C15.0903 15 16.59 15.8303 17.3178 17.1632C17.6689 17.8062 17.4108 18.5964 16.807 19.0112Z" fill="#862fc1"></path> <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3432 6 9.00004 7.34315 9.00004 9C9.00004 10.6569 10.3432 12 12 12Z" fill="#862fc1"></path> </g></svg>
                
            </div>
            <div class="profile-info">
                <h2><?php echo $info['pseudo']; ?></h2>
                <!-- <p>Profession</p>
                <a href="#" class="button">Contacter</a> -->
            </div>
        </div>
        
        <div class="additional-info">
            <h1>INFORMATION </h1>
            <ul>
                <li id="name"><strong>Nom:</strong><?php echo $info['pseudo']; ?></li>
                <li id="poids"><strong>Poids:</strong><?php echo $info['poids']; ?></li>
                <li id="size"><strong>Taille:</strong> <?php echo $info['taille']; ?> m</li>
                <?php
                    if($info['genre']==0)
                    {
                        echo '<li id="genre"><strong>Genre:</strong> Femme</li>';
                    }
                    else
                    {
                        echo '<li id="genre"><strong>Genre:</strong> Homme</li>';
                    }
                ?>
            </ul>
        </div>
        <a href="#"><button type="button" class="action">Nouvelle achat</button></a>
        <a href="<?php  echo base_url();?>ClientController/codepage"><button type="button" class="action" style="background-color: #ffffff;">Ajouter Argent</button></a>
        <a href="<?php  echo base_url();?>ClientController/logout"><button type="button" class="action" style="background-color: #ffffff;">DECONNEXION</button></a>
        
        <div class="vola">
            <p><?php echo $money; ?> Ar</p>
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

    <div class="content">
        <h1>LISTE CODE VALIDE</h1>
        
        <div class="container">
            <div class="text-center mb-5">
              <h3>Jobs openning</h3>
              <p class="lead">Eros ante urna tortor aliquam nisl magnis quisque hac</p>
            </div>
            

           <?php foreach($codes as $code) 
           
           {
            ?>


            <div class="cards mb-3">
              <div class="cards-body">
                <div class="d-flex flex-column flex-lg-row">
                  <!-- <span class="avatar avatar-text rounded-3 me-4 bg-info mb-2">PM</span> -->
                  <div class="row flex-fill">
                    <div class="col-sm-5">
                      <h4 class="h5"><?php echo $code['code']; ?></h4>
                      <span class="badge bg-secondary"><?php echo $code['montant']; ?> Ar</span> 
                    </div>
                    
                    <div class="col-sm-3 text-lg-end">
                      <!-- <a href="#" class="btn btn-primary stretched-link">Apply</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php  } ?>

          </div>

    </div>
    
    <script>
        function toggleForm(formId) {
            var form = document.getElementById(formId);
            form.classList.toggle('hidden');
    
        }

        

    </script>
</body>
</html>

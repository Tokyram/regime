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
        <h2>Section 2</h2>
        <p>Contenu de la section 2.</p>
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
    </script>
</body>
</html>

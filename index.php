<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon Portfolio</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body class="light">

  <div class="btn-toggle">theme</div>

  <header>
    <div id="accueil" class="container">

      <h1 style="margin-bottom:-50px">Khalil</h1>

      <nav>
        <ul>
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#competances">Mes Competances</a></li>
          <li><a href="#projects">Mes Projets</a></li>
          <li><a href="#references">References</a></li>
          <li><a href="#contact" id="btn-contact" class="btn">Contactez-moi</a></li>
        </ul>

      </nav>
    </div>
  </header>
  <!-- mon profil -->
  <section id="profil">
    <div class="container">
      <div class="title">
        <h2>IBRAHIMA KHALIL BALDE</h2>
        <p>Je suis un développeur passionné et créatif avec une passion pour la création de solutions innovantes.</p>

        <a class="btn"id="telechargePdf">Télécharger mon CV</a>
      </div>
    </div>
  </section>
  <!-- les statistiques  -->
  <section id="statistique">
    <div class="container">
      <div class="row">
        <div class="stats">
          <img src="img/icon-client2.png" alt="icon-clients">
          <p>Clients 10 +</p>
        </div>
        <div class="stats">
          <img src="img/icon-projet3.png" alt="icon-projets">
          <p>20 projets</p>
        </div>
        <div class="stats">
          <img src="img/icon-experience2.png" alt="icon-experiences">
          <p>5ans experien</p>
        </div>
        <div class="stats">
          <img src="img/icon-colaboration.png" alt="icon-colaboration">
          <p>3 collabs</p>
        </div>
      </div>
    </div>
  </section>
  <!-- mes competances -->
  <section id="competances">
    <div class="container">
      <div class="darkS">
        <h2 id="compe">Mes Competances</h2>
        <div class="row">
          <div class="project">
            <img src="img/icon-competance-html.png" alt="Projet 1" />
            <h3>HTML & CSS</h3>
            <p>Ce projet est un site web e-commerce conçu pour une boutique de vêtements en ligne. J'ai utilisé HTML, CSS et JavaScript pour créer un site web dynamique et facile à utiliser.</p>
          </div>
          <div class="project">
            <img src="img/icon-competance-bootstrap4.jpg" alt="Projet 3" />
            <h3>BOOTSTRAP</h3>  
            <p>Ce projet est un site web e-commerce conçu pour une boutique de vêtements en ligne. J'ai utilisé HTML, CSS et JavaScript pour créer un site web dynamique et facile à utiliser.</p>
          </div>
          <div class="project">
            <img src="img/icon-competance-php3.png" alt="Projet 2" />
            <h3>PHP</h3>
            <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
          </div>
          <div class="project">
            <img src="img/icon-competance-laravel.jpg" alt="Projet 2" />
            <h3>Laravel</h3>
            <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- les projets sur les quels j'ai eu a travailler -->
  <section id="projects">
    <div class="container">
      <div class="darkS">
        <h2>Mes projets</h2>
        <div class="row">

          <div class="project">
            <img src="img/imgProjet2.PNG" alt="Projet 1" />
            <h3>Portfolio</h3>
            <p>Ce projet c'est mon portfolio ou j'ai detailler mon parcoure scolaire, mes competances, les projets sur les quels j'ai eu à travailler. c'est mon CV en ligne.<br> J'ai utilisé HTML, CSS et JavaScript pour créer ce site web dynamique et facile à utiliser.</p>
          </div>
          <div class="project">
            <img src="img/imgProjet2.PNG" alt="Projet 2" />
            <h3>Atlantic Maritime</h3>
            <p>Ce projet est un site web d'actualités conçu pour une entreprise maritime de la place pour mettre en valeur leurs realisation à travers l'internet. J'ai utilisé HTML, CSS, JavaScript, PHP et Laravel pour réaliser un projet flexible, securisé et facile à maintenire </p>
          </div>
          <div class="project">
            <img src="img/imgProjet3.PNG" alt="Projet 3" />
            <h3>R-CUN</h3>
            <p>Ce projet est un site web vitrine que j'ai eu a réaliser lors d'une formation de renforcement de capacité dans l'usage du numerique organisée par L'ANSUTEN. J'ai utilisé HTML, CSS et Bootstrap pour créer un site web facile à gérer pour l'équipe d'ANSUTEN</p>
          </div>

        </div>
        <div class="btn-suivant">
          <a href="#" class="btn">Voire plus ...</a>
        </div>

      </div>
    </div>
  </section>
  <!-- les references professionnelles -->
  <section id="references">
    <div class="container">
      <div class="darkS">
        <h2>Références Professionnelles</h2>
        <div class="row">
          <div class="reference">
            <img src="img/icon-client2.png" alt="Projet 1" />
            <h3>Elhadj Bah</h3>
            <p>PDG de SUIT<br>
              mail:elbahdara@gmail.com<br>
              LinkedIn : Elhadj Bah
            </p>
          </div>
          <div class="reference">
            <img src="img/icon-client2.png" alt="Projet 2" />
            <h3>Ousseynou Diop</h3>
            <p>CEO de XARALA<br>
              mail:xarala@gmail.com<br>
              LinkedIn : Ousseynou Diop
            </p>
          </div>
          <div class="reference">
            <img src="img/icon-client2.png" alt="Projet 3" />
            <h3>Aliou Barry</h3>
            <p>CEO d'ELITE EDICATIF<br>
              mail:alioubarry@gmail.com<br>
              LinkedIn : Mamadou Aliou barry
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- la prise de contact et le formulair de contact -->
  <section id="contact">
    <div class="container">
      <div class="darkS">
        <div class="row">

          <div class="ccontact">
            <h3>Mes contacts</h3>
            <p>Vous voulez un site web qui repond à vos besoin ?<br> N'hesitez pas appelez moi !</p>
            <ul class="ulcontact">
              <li>kalilbalde20@gmail.com</li>
              <li>LinkedIn: IBRAHIMA KHALIL BALDE</li>
              <li>Contact : 77 863 44 05</li>
              <li>Adresse : Grand Dakar</li>
            </ul>
          </div>

          <div class="fcontact">
            <h2>Contactez-moi</h2>
            <form action="#" method="POST">
              <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
              </div>
              <button type="submit" class="btn">Envoyer</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- les element du pied de page -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="navfooter">
          <ul class="ulfooter">
            <li><a style="text-decoration: none" href="#accueil">Accueil</a></li>
            <li><a style="text-decoration: none" href="#competances">Mes competances</a></li>
            <li><a style="text-decoration: none" href="#projects">Mes projets</a></li>
            <li><a style="text-decoration: none" href="#references">Référence Professionnelles</a></li>
            <li><a style="text-decoration: none" href="#contact">contactez-moi</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="navfooter">
      <p id="navfoote"> &copy; copyright 2023 </p>
    </div>
  </footer>

  <!-- l'inclusion du fichier javaScript -->
  <script src="script.js" defer></script>

</body>

</html>
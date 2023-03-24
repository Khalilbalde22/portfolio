<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div id="accueil" class="container">

        <h1>Khalil</h1>

        <nav >
          <ul>
          
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#apropos">À propos de moi</a></li>
            <li><a href="#competances">Mes Competances</a></li>
            <li><a href="#projects">Mes Projets</a></li>
            <li><a href="#reference">References</a></li>
            <li><a href="#contact" class = "btn">Contactez-moi</a></li>
          </ul>
          
        </nav>
      </div>
    </header>

    <section id="profil">
      <div class="container">
        <div class="title">
            <h2>Bienvenue sur mon Portfolio</h2>
            <p>Je suis un développeur passionné et créatif avec une passion pour la création de solutions innovantes.</p>
            
            <a href="#projects" class="btn">Télécharger mon CV</a>
        </div>
      </div>
    </section>

    <section id="apropos">
      <div class="container">
        <h2>À propos de moi</h2>
        <p>Je suis un développeur web avec plus de 5 ans d'expérience dans le domaine. J'aime créer des sites web fonctionnels et élégants qui répondent aux besoins de mes clients.</p>
      </div>
    </section>

    <section id="competances">
      <div class="container">
        <div class="couleurbackground">
          <h2>Mes Competances</h2>
          <div class="row">
              <div class="project">
                  <img src="backgruond.jfif" alt="Projet 1" />
                  <h3>Projet 1</h3>
                  <p>Ce projet est un site web e-commerce conçu pour une boutique de vêtements en ligne. J'ai utilisé HTML, CSS et JavaScript pour créer un site web dynamique et facile à utiliser.</p>
              </div>
              <div class="project">
                  <img src="backgruond.jfif" alt="Projet 2" />
                  <h3>Projet 2</h3>
                  <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
              </div>
              <div class="project">
                  <img src="backgruond.jfif" alt="Projet 2" />
                  <h3>Projet 2</h3>
                  <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="projects">
      <div class="container">
        <div class = "couleurbackground">
          <h2>Mes projets</h2>
          <div class="row">
              <div class="project">
                  <img src="imgProjet2.PNG" alt="Projet 1" />
                  <h3>Projet 1</h3>
                  <p>Ce projet est un site web e-commerce conçu pour une boutique de vêtements en ligne. J'ai utilisé HTML, CSS et JavaScript pour créer un site web dynamique et facile à utiliser.</p>
              </div>
              <div class="project">
                  <img src="imgProjet2.PNG" alt="Projet 2" />
                  <h3>Projet 2</h3>
                  <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
              </div>
              <div class="project">
                  <img src="imgProjet3.PNG" alt="Projet 3" />
                  <h3>Projet 3</h3>
                  <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="reference">
      <div class="container">
        <div class = "couleurbackground">
          <h2>Références Professionnelles</h2>
          <div class="row">
              <div class="reference">
                  <img src="imgProjet2.PNG" alt="Projet 1" />
                  <h3>Projet 1</h3>
                  <p>Ce projet est un site web e-commerce conçu pour une boutique de vêtements en ligne. J'ai utilisé HTML, CSS et JavaScript pour créer un site web dynamique et facile à utiliser.</p>
              </div>
              <div class="reference">
                  <img src="imgProjet2.PNG" alt="Projet 2" />
                  <h3>Projet 2</h3>
                  <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
              </div>
              <div class="reference">
                  <img src="imgProjet3.PNG" alt="Projet 3" />
                  <h3>Projet 3</h3>
                  <p>Ce projet est un site web d'actualités conçu pour un journal en ligne. J'ai utilisé WordPress pour créer un site web facile à mettre à jour et à gérer pour l'équipe du journal.</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="couleurbackground">
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

    <footer>
      <div class="container">
        <div class="row">
            <div class="navfooter">
                <ul class="ulfooter">
                    <li><a style="text-decoration: none" href="#accueil">Accueil</a></li>
                    <li><a style="text-decoration: none" href="#apropos">Apropos</a></li>
                    <li><a style="text-decoration: none" href="#competances">Mes competances</a></li>
                    <li><a style="text-decoration: none" href="#projets">Mes projets</a></li>
                    <li><a style="text-decoration: none" href="#contact">contactez-moi</a></li>
                </ul>
            </div>
        </div>
      </div>
            <div class="navfooter"><p> &copy; copyrigth 2023 </p></div>
    </footer>
  </body>
</html>
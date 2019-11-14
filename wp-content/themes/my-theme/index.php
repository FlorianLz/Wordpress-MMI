<?php get_header(); ?>

<div class="container">
  <section class="banniere">
    <div class="contenubanniere">
      <p>Les rencontres de la Fondation le 03 Décembre à Bruxelles</p>
      <p>Chaîne alimentaire végétale et durabilité :</p>
      <p>Une question d'équilibre !</p>
      <button>S'inscrire aux rencontres</button>
    </div>
  </section>

  <section class="conference">
    <h1>La conférence</h1>
    <p>Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire
    <br> végétale et durabilité : une question d'équilibre" ! Elles se tiendront le 3 Décembre prochain à Bruxelles
    <br>et auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires
    à travers le monde,
    <br>qui appelle à favoriser une alimentation plus végétale.</p>
  </section>

  <section class="bandeau">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bandeau.jpg">
    <div class="auprogramme">
      <h1>Au programme</h1>

      <div class="titres">
        <h3>Les végétaux dans la chaîne alimentaire</h3>
        <h3>Les activités de la fondation</h3>
      </div>

      <div class="grille">
        <div class="vegetaux">
          <table>
            <tr><th>8:30</th><td>Introduction par Christophe<br> Fondation</td></tr>
            <tr><th>9:00</th><td>Wim de Vries Wageningen University</td></tr>
            <tr><th>9:45</th><td>Benjamin Alles Paris XIII University</td></tr>
            <tr><th>10:15</th><td>Armando Perez Cueto Copenhagen University</td></tr>
            <tr><th>10:45</th><td>Cofee break</li>
          </table>

        </div>
        
        <div class="activites">
          <table>
            <tr><th>11:15</th><td>Jacynthe Lafrenière, Lauréate du Prix de Recherche</td></tr>
            <tr><th>11:35</th><td>Le projet EPICALIM de la Fondation</td></tr>
            <tr><th>12:00</th><td>Cérémonie du Prix de Recherche</td></tr>
            <tr><th>12:30</th><td>Lunch</td></tr>
          </table>
        </div>
      </div>

      <div class="inscription">
        <button>S'inscrire aux rencontres</button>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/programme.png">
    </div>
  </section>

  <section class="orateurs">
    <h1>Les orateurs</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, dicta.</p>
    <div class="listeorateurs">
      <div class="infosorateur">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="Photo orateur">
        <h4>Wim de Vries</h4>
        <p>Lorem ipsum calidae (1)</p>
        <button class="btnvideo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="Image lecture vidéo">Lire la vidéo</button>
      </div>
      <div class="infosorateur">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="Photo orateur">
        <h4>Laurence Depezay</h4>
        <p>Lorem ipsum calidae (6)</p>
        <button>En savoir plus</button>
      </div>
      <div class="infosorateur">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="Photo orateur">
        <h4>Armando Perez Cueto</h4>
        <p>Lorem ipsum calidae (3)</p>
        <button class="btnvideo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="Image lecture vidéo">Lire la vidéo</button>
      </div>
      <div class="infosorateur">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="Photo orateur">
        <h4>Christophe</h4>
        <p>Lorem ipsum calidae (4)</p>
        <button>Lire la tribune</button>
      </div>
      <div class="infosorateur">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="Photo orateur">
        <h4>Benjamin Alles</h4>
        <p>Lorem ipsum calidae (2)</p>
        <button>Lire la tribune</button>
      </div>
      <div class="infosorateur">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg" alt="Photo orateur">
        <h4>Jacinthe Lafronière</h4>
        <p>Lorem ipsum calidae (5)</p>
        <button class="btnvideo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="Image lecture vidéo">Lire la vidéo</button>
      </div>
    </div>
  </section>

  <section class="infospratiques">
    <div class="titresection"><h1>Informations pratiques</h1></div>
    <div class="contenuinfos">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lieu.png" alt="Lieu">
      <div class="infos">
      <div class="donnees">
        <div class="localistion">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picto-map.svg" alt="Lieu"">
            <p>Square Brussels<br> Mont des Arts<br> 1000 Bruxelles<br> Belgique</p>
          </div>
          <div class="horaires">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picto-map.svg" alt="Lieu"">
            <p>Square Brussels<br> Mont des Arts<br> 1000 Bruxelles<br> Belgique</p>
          </div>
          <div class="sante">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/picto-map.svg" alt="Lieu"">
            <p>Square Brussels<br> Mont des Arts<br> 1000 Bruxelles<br> Belgique</p>
          </div>
        </div>  
      </div>
    </div>



  </section>














<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();


  }
}
?>

</div>

<?php get_footer(); ?>
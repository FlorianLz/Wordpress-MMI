<?php get_header(); ?>
<section class="actus">
  <div class="titresection"><h1>Actus</h1></div>
    <div class="contenuactus">
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
          ?>
          <div class="article">
          <div class="imagearticle"><?php the_post_thumbnail(); ?></div>
          <div class="infosarticle">
            <div class="titrearticle"><?php echo get_the_title(); ?></div>
            <div class="contenuarticle"><?php echo get_the_excerpt(); ?></div>
            <div class="boutonsuite"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><div>Lire la suite</div></a></div>
            <div class="datearticle"><?php echo get_the_date(); ?></div>
          </div>
        </div>
      <?php

        }
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
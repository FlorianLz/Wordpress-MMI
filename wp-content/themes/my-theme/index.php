<?php get_header(); ?>
<h1>Page standard</h1>
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    $banner_background_image = get_field('banner_background_image');
    $conference_background_image = get_field('conference_background_image');

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

  }
}
?>



<?php get_footer(); ?>
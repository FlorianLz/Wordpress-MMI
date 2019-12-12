<?php get_header(); ?>
<section class="contact">
<h1>Page de contact</h1>
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
    echo '<div class="contactform">';
    echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]');
    echo '</div>';
  }
}
?>
</section>


<?php get_footer(); ?>
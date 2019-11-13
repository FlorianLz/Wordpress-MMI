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
    <p>La conférence</p>
    <p>Les Rencontres de la Fondation s'intitulent cette année "Chaîne alimentaire végétale et durabilité :
    une question d'équilibre" ! Elles se tiendront le 3 Décembre prochain à Bruxelles et 
    auront pour objectif de décrypter la transition nutritionnelle des systèmes alimentaires
    à travers le monde, qui appelle à favoriser une alimentation plus végétale.</p>

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
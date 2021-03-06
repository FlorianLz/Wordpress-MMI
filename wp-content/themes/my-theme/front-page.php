<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    $banner_background_image = get_field('banner_background_image');
    $conference_background_image = get_field('conference_background_image');
    $image_telechargement1 = get_field('image_telechargement1');
    $image_telechargement2 = get_field('image_telechargement2');
    $infos_banner = get_field('infos_banner');
    $infos_pictolieu = get_field('infos_pictolieu');
    $infos_pictodate = get_field('infos_pictodate');
    $infos_pictoadjectif = get_field('infos_pictoadjectif');

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

<div class="container">
  <section class="banniere">
    <div class="contenubanniere" style="background-image:url('<?php echo $banner_background_image['url'] ?>;')">
      <p><?php the_field('banner_baseline'); ?></p>
      <p><?php the_field('banner_title_brown'); ?></p>
      <p><?php the_field('banner_title_green'); ?></p>
      <?php $link = get_field('banner_register_link'); ?>
      <a href="<?php echo $link['url']; ?>" target="_blank"><button><?php echo $link['title']; ?></button></a>
    </div>
  </section>

  <section class="conference">
    <h1><?php the_field('conference_title'); ?></h1>
    <p><?php the_field('conference_content'); ?></p>
  </section>

  <section class="bandeau">
    <img src="<?php echo $conference_background_image['url']; ?>">
    <div class="auprogramme">
      <h1><?php the_field('programme_title'); ?></h1>

      <div class="titres">
        <h3><?php the_field('programme_title1'); ?></h3>
        <h3><?php the_field('programme_title2'); ?></h3>
      </div>

      <div class="grille">
        <div class="vegetaux">
          <table>
          <?php 
          $programs = get_field('programme_content1');
          foreach($programs as $program){
            $heure = $program['programme_heures1'];
            $liste = $program['programme_liste1'];
            echo "<tr><th>$heure</th><td>$liste</td></tr>";
          }
          ?>
          </table>

        </div>
        
        <div class="activites">
          <table>
          <?php 
          $programs = get_field('programme_content2');
          foreach($programs as $program){
            $heure = $program['programme_heures2'];
            $liste = $program['programme_liste2'];
            echo "<tr><th>$heure</th><td>$liste</td></tr>";
          }
          ?>
          </table>
        </div>
      </div>

      <div class="inscription">
        <a href="<?php echo $link['url']; ?>" target="_blank"><button><?php echo $link['title']; ?></button></a>
      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/programme.png">
    </div>
  </section>

  <section class="orateurs">
    <h1><?php the_field('orateurs_title'); ?></h1>
    <p><?php the_field('orateurs_description_section'); ?></p>
    <div class="listeorateurs">
      <?php 
      $orateurs = get_field('orateurs_content');
      foreach($orateurs as $orateur){
        $photo = $orateur['orateurs_photo']['url'];
        $nomprenom = $orateur['orateurs_nomprenom'];
        $description = $orateur['orateurs_description']; ?>

        <div class="infosorateur">
          <img src="<?php echo $photo; ?>" alt="Photo orateur">
          <h4><?php echo $nomprenom; ?></h4>
          <p><?php echo $description; ?></p>
          <button class="btnvideo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="Image lecture vidéo">Lire la vidéo</button>
        </div>

      <?php 
      }
      ?>
    </div>
  </section>

  <section class="infospratiques">
    <div class="titresection"><h1><?php the_field('infos_title'); ?></h1></div>
    <div class="contenuinfos">
      <img src="<?php echo $infos_banner['url']; ?>" alt="Lieu">
      <div class="infos">
      <div class="donnees">
        <div class="localistion">
            <img src="<?php echo $infos_pictolieu['url']; ?>" alt="Lieu">
            <p><?php the_field('infos_lieu'); ?><br> <?php the_field('infos_ville'); ?><br> <?php the_field('infos_pays'); ?></p>
          </div>
          <div class="horaires">
            <img src="<?php echo $infos_pictodate['url']; ?>" alt="Lieu">
            <p><?php the_field('infos_date'); ?><br> <?php the_field('infos_heure'); ?></p>
          </div>
          <div class="sante">
            <img src="<?php echo $infos_pictoadjectif['url']; ?>" alt="Lieu">
            <p><?php the_field('infos_adjectif1'); ?><br><?php the_field('infos_adjectif2'); ?></p>
          </div>
        </div>  
      </div>
      <div class="voircarte">
        <svg xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 0 56 75">
            <path fill="none" fill-rule="evenodd" stroke="#0d7619" stroke-width="3.5" d="M28 2c14.36 0 26 11.54 26 25.775 0 9.49-8.667 24.33-26 44.521-17.333-20.19-26-35.03-26-44.52C2 13.54 13.64 2 28 2zm0 11.556c-7.446 0-13.481 6.035-13.481 13.481S20.554 40.519 28 40.519s13.481-6.036 13.481-13.482S35.446 13.556 28 13.556z"/>
        </svg>
        <p>Voir sur la carte</p>
      </div>
    </div>
  </section>

  <section class="videos">
    <div class="titresection"><h1><?php the_field('videos_title'); ?></h1></div>
      <div class="contenuvideos">
        <div class="haut">
          <div class="video">
            <div class="masque"></div>
            <div class="contenumasque">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
              <h3><?php the_field('videos_title1'); ?></h3>
              <p><?php the_field('videos_author1'); ?></p>
            </div>
          </div>
          <div class="video">
            <div class="masque"></div>
            <div class="contenumasque">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
              <h3><?php the_field('videos_title2'); ?></h3>
              <p class="notransform"><?php the_field('videos_author2'); ?></p>
            </div>
          </div>
        </div>
        <div class="petitevideo">
          <div class="imagevideo">
            <div class="image">
              <div class="masqueimage">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
            </div>
            <div><h3><?php the_field('videos_title3'); ?></h3>
              <p><?php the_field('videos_author3'); ?></p>
            </div>
          </div>
          <div class="descvideo"></div>
        </div>
        <div class="petitevideo">
          <div class="imagevideo">
            <div class="image">
              <div class="masqueimage">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
            </div>
            <div><h3><?php the_field('videos_title4'); ?></h3>
              <p><?php the_field('videos_author4'); ?></p>
            </div>
          </div>
          <div class="descvideo"></div>
        </div>
        <div class="petitevideo">
          <div class="imagevideo">
            <div class="image">
              <div class="masqueimage">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
            </div>
            <div><h3><?php the_field('videos_title5'); ?></h3>
              <p><?php the_field('videos_author5'); ?></p>
            </div>
          </div>
          <div class="descvideo"></div>
        </div>
        <div class="petitevideo">
          <div class="imagevideo">
            <div class="image">
              <div class="masqueimage">
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
            </div>
            <div><h3><?php the_field('videos_title6'); ?></h3>
              <p><?php the_field('videos_author6'); ?></p>
            </div>
          </div>
          <div class="descvideo"></div>
        </div>
      </div>
  </section>

  <section class="actus">
    <div class="titresection"><h1><?php the_field('actus_title'); ?></h1></div>
    <div class="contenuactus">
      <?php $query = new WP_QUERY(array('post_type' => 'post'));
      while($query->have_posts()){
        $query->the_post();?>

        <div class="article">
          <div class="imagearticle"><?php the_post_thumbnail(); ?></div>
          <div class="infosarticle">
            <div class="titrearticle"><?php the_title(); ?></div>
            <div class="contenuarticle"><?php the_excerpt(); ?></div>
            <div class="boutonsuite"><a href="<?php the_permalink(); ?>"><div>Lire la suite</div></a></div>
            <div class="datearticle"><?php the_date(); ?></div>
          </div>
        
        </div>

      <?php } ?>
    </div>
  </section>

  <section class="telechargements">
        <div class="carte">
          <img src="<?php echo $image_telechargement1['url']; ?>">
        </div>
        <div class="carte">
          <img src="<?php echo $image_telechargement2['url']; ?>">
        </div>
  </section>
  
<?php

  }
}
?>

</div>

<?php get_footer(); ?>
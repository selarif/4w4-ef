<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">
	


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Cours</h1>
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="LesCours">
                <?php
                /* Start the Loop */
                $precedent = "XXXXXXX";
                while ( have_posts() ) :
                    the_post();
                                                /*if (in_array( $tPropriété['session'], ['2'])):
                                                    get_template_part( 'template-parts/content', 'cours' );
                                                endif; */
                                            /*get_template_part( 'template-parts/content', 'cours' );*/
                 
                    convertirTableau($tPropriété); /// à chaque fois que le précédent est différent de la session présente, créer une nouvelle section
					if ($tPropriété['session'] != $precedent): 
                            if ("XXXXXX" != $precedent): /// Quand $precedent n'est pas comme en premier (XXXXXX), alors restart la boucle ?>
                                </section>
                            <?php endif;?>
                            <h2 class="NumSession"><?php echo $tPropriété['session'] /// On affiche le numero de session. Mais comment le trier ? ?></h2>
							<section class="contenu">
                                <?php get_template_part( 'template-parts/content', 'cours' ); ?>
							</section>
					  	
						<section <?php echo class_composant($tPropriété['session']) ?>>
					<?php endif;  
                            
                endwhile;?>
			</section> <!-- fin section cours -->
		
            <?php endif ?>

	

	</main><!-- #main -->

<?php 
// get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	/*
	$titre = get_the_title(); 
	// 582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre,-4,3);
	$titrePartiel =substr($titre,8,-6);
	$session = substr($titre, 4,1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-6,6);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}


function class_composant($numSession){

	if (in_array($numSession, ['Web', 'Jeu', 'Spécifique'])){
		return 'class="carrousel-2"';
	}
}
?>
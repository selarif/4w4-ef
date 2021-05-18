<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>
<!--

        <h1 class="NumSession"><?php //echo $tPropriété['session'] = substr($tPropriété['titre'], 4,1);?></h1> -->
<div class="contenu">
    <h6 ><?php $tPropriété['titre'] = get_the_title(); echo $tPropriété['typeCours'] = get_field('type_de_cours');?></h6>
    <!-- <a href="<?php //echo get_permalink(); ?>"><?php //echo $tPropriété['titre']; ?></a> -->
    <h4><?php echo $tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7); ?></h4>
    <h6><?php echo $tPropriété['nbHeure'] = substr($tPropriété['titre'],-6,6);?></h6>
</div>


<!-- Déclarer cette page en tant que modèle -->
<!-- Ajouter un décorateur -->
<?php

/*
Template Name: Sidebar Gauche 
*/

?>




<?php get_header(); ?>

<!-- Placer la DIV Parent -->
<div class="containerPageSidebar">
        
    <!-- Placer div 1/3 -->
    <aside class="asidePage">
        
        <div class="widget-block">
            <!-- Sidebar -->
            <?php
            if(is_active_sidebar('sidebar')){
                dynamic_sidebar('sidebar'); 
            }; 

            ?>

        </div>


    </aside>


    <!-- Placer div 2/3 -->
    <section class="mainPage">
        <!-- Ici contenu de la page -->
        <?php
        while(have_posts()){
        the_post(); ?>

            <section class="blogPost">
                <div class="blog-desc">
                    <h1> <?php the_title(); ?></h1>
                    <p class="blog-desc-texte">
                    <?php the_content(); ?>
                    </p>
                </div>
            </section>

        <?php } ?>    

    </section><!-- Fermeture des 2/3 -->


</div>



<?php get_footer(); ?>
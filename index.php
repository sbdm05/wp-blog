test depuis index

<?php get_header(); ?>



    <section id="blog">

    <?php 
    while(have_posts()){
        the_post(); ?>

    
        <article class="blog-item">
            <div class="blog-item-image">

                <!-- Condition -->
                <?php if(has_post_thumbnail()){
                    the_post_thumbnail(); 
                }else{?>
                    <img src="<?php echo get_template_directory_uri().'/img/default-image.png'?> ">
                <?php } ?>

                
            </div>
            <div class="blog-item-titre">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p>
                    <!-- Extrait 55 mots -->
                    <!-- <?php the_excerpt(); ?> -->
                    <!-- Fonction pour obtenir un nombre précis de mots -->
                    <?php echo wp_trim_words(get_the_content(), 10); ?>
                </p>
            </div>
        </article>

    <?php } ?>

    </section>

<?php get_footer(); ?>
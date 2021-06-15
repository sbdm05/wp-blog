test depuis single 
<?php get_header(); 


    while(have_posts()){
        the_post(); ?>

        <section class="blogPost">
            <div class="blog-desc">
                <!-- <img src="img/img1.jpg"> -->
                <?php the_post_thumbnail(); ?>

            </div>
            <div class="blog-desc">
                <h1> <?php the_title(); ?></h1>
                <p class="blog-desc-texte">
                <?php the_content(); ?>
                </p>
            </div>
        </section>

    <?php } ?>



    <?php get_footer(); ?>
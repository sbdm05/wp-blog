<footer>

    <!-- Placer div parent widgets-footer-area -->
    <!-- Placer 3 div enfants widget-footer -->
    <!-- A l'intérieur, on place le bloc widget-block avec l'emplacement de sidebar à l'intérieur -->

    <div class="widgets-footer-area">

    <div class="widget-footer">
        <div class="widget-block">
                <!-- Sidebar -->
                <?php
                if(is_active_sidebar('footerleft')){
                    dynamic_sidebar('footerleft'); 
                }; 

                ?>

            </div>
        </div>

   

    <div class="widget-footer">
        <div class="widget-block">
                <!-- Sidebar -->
                <?php
                if(is_active_sidebar('footercentral')){
                    dynamic_sidebar('footercentral'); 
                }; 

                ?>

            </div>
        </div>

    

    <div class="widget-footer">
        <div class="widget-block">
                <!-- Sidebar -->
                <?php
                if(is_active_sidebar('footerright')){
                    dynamic_sidebar('footerright'); 
                }; 

                ?>

            </div>
        </div>

    

    </div><!-- Fermeture de widgets-footer-area -->


    <p>Copyright @2021 - Portfolio</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
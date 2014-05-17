       <footer class="footer">
           <div class="row">
               <section class="desktop-4 tablet-3 mobile-3 about">
                   <h3>About</h3>
                     <p>
                        Nam vitae nisl ut nibh placerat consectetur. Mauris ornare eros ut lectus faucibus sollicitudin. Nam sed                              dolor dolor. Fusce et lorem vel elit eleifend aliquam. Fusce at venenatis est. Interdum et malesuada fames ac                             ante ipsum primis in faucibus. Aenean ullamcorper sed urna at porta. 
                     </p>
               </section> 
               <section class="desktop-4 tablet-3 mobile-3 categories">
                    <h3>Categories</h3>
                    <!-- categories -->
                        <?php while(categories()) : ?>
                            <a href="<?php echo category_url(); ?>">
                            <?php echo category_title(); ?></a> 
                            (<?php echo category_count(); ?>)
                        <?php endwhile; ?>
                    <!-- end categories -->
               </section> 
               <section class="desktop-4 tablet-3 mobile-3 contact">
                    <h3>Contact</h3>
                    <ul>
                        <li><span class="ion-social-github"> </span><a href="http://github.com/andresolivares"> Github: andresolivares</a></li>
                        <li><span class="ion-social-twitter-outline"> </span> <a href="http://twitter.com/and27res"> Twitter @and27res</a></li>
                    </ul>
               </section>
           </div>
       </footer>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="<?php echo theme_url('bower_components/Parallax-ImageScroll/jquery.imageScroll.js'); ?>"></script>
    </body>
</html>
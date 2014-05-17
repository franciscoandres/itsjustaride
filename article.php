<?php theme_include('/_template/header'); ?>

    <div class="row">
        <section class="desktop-8 desktop-push-2 tablet-3 mobile-3">
            <article class="posts">
                <header class="meta-post">
                    <a href="<?php echo article_url(); ?>"><h1><?php echo article_title(); ?></h1></a>
                        <label><span class="ion-ios7-contact-outline"></span> <?php echo article_author(); ?></label> 
                        <time><span class="ion-ios7-clock-outline"></span> <?php echo relative_time(article_date()); ?></time>
                </header>
                <section class="article-description">    
                    <p><?php echo article_markdown(); ?></p>
                </section>
            </article>
        </section><!-- end desktop-tablet-mobile -->
    </div>

<?php theme_include('/_template/footer'); ?>
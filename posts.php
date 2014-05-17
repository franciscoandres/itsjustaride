<?php theme_include('/_template/header'); ?>
    <!-- artciles -->
    <div class="row">
        <section class="desktop-6 desktop-push-3 tablet-4 mobile-3">
            <?php if(has_posts()) : ?>
                <?php while(posts()) : ?>
                    <article class="posts">
                        <header class="meta-post">
                            <a href="<?php echo article_url(); ?>"><h1><?php echo article_title(); ?></h1></a>
                             <label><span class="ion-ios7-contact-outline"></span> <?php echo article_author(); ?></label> 
                             <time><span class="ion-ios7-clock-outline"></span> <?php echo relative_time(article_date()); ?></time>
                         </header>
                         <section class="article-description">    
                            <p><?php echo article_description(); ?></p>
                        </section>
                        <span class="ion-link"></span> <a href="<?php echo article_url(); ?>">Continuar leyendo...</a> 
                        </article>
                <?php endwhile; ?>
            <?php endif; ?><!-- end article -->
        </section><!-- end grid article -->
		<section class="desktop-6 desktop-push-3 tablet-4 mobile-3">
			<?php if(has_pagination()): ?>
				<nav class="pagination">
					<div class="wrap">
						<?php echo posts_prev(); ?>
						<?php echo posts_next(); ?>
					</div>
				</nav>
			<?php endif; ?>
		</section>
    </div><!-- end row -->
    <!-- menu -->
<?php theme_include('/_template/footer'); ?>
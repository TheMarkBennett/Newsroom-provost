<?php get_header(); the_post(); ?>


	<div class="container mt-4 mt-sm-5 mb-5 pb-sm-4">
    <?php provost_news_featured_article(); ?>
		<div class="row">
			<div class="main  col-md-12">
				<section class="news-cat mt-4 pb-3 mb-4">

        <?php provost_news_section() ?>
      	</section>
				<section>
				<?php provost_news_featured_tax(); ?>
        <?php //provost_news_latest_articles(); ?>
			</section>
			<?php if ( is_active_sidebar( 'font-sidebar' ) ) : ?>
				<section class="ucf-today py-4">
					<?php dynamic_sidebar( 'font-sidebar' ); ?>
				</section>
				<?php endif; ?>
      <?php //get_sidebar(); ?>
    </div>
	</div>


<?php get_footer(); ?>

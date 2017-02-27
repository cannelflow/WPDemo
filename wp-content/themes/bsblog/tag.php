<?php get_header() ; ?>

<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_theme_mod('header_background') ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>
                                Tag : <?php single_cat_title() ; ?>
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php get_template_part('template-parts/content', get_post_format()) ; ?>
                <?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                
                <div class="blog-nav">
                     <?php get_template_part('template-parts/content-nav', get_post_format()) ; ?>
                </div>
                
            </div>
        </div>
    </div>

    <hr>

<?php get_footer() ; ?>
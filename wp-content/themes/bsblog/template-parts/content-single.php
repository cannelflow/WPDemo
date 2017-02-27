<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_theme_mod('header_background') ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php the_title() ; ?></h1>
                        <p class="post-meta">
                            Posted by <?php the_author_posts_link(); ?> 
                            on <?php the_time('F j, Y'); ?>
                            Category <?php if(has_category()) {
                                        the_category(', ');
                                      } else {
                                       echo("No Category Found!!");
                                        }
                              ?>
                              <?php if(has_tag()) {
                                        the_tags();
                                      } else {
                                       echo("No Tags Found!!");
                                        }
                              ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 article">
                
                  <div class="blog-content">
                        <p class="post-subtitle">
                             <?php 
                                $content = get_the_content();
                                echo $content ;
                            ?>
                        <p>
                    </div>
                
                
                <div class="blog-nav">
                     <?php get_template_part('template-parts/content-nav', get_post_format()) ; ?>
                </div>
                
                <div class="blog-comment">
                    
                    <?php comments_template() ; ?>
                </div>
                
            </div>
            <div class="col-md-4 sidebar">
                 <?php if(is_active_sidebar('sidebar')) : ?>
					<?php dynamic_sidebar('sidebar'); ?>
			 <?php endif; ?>
    	    
            </div>
        </div>
    </div>

<?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
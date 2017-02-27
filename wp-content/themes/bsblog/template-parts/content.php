<div class="post-preview">
                    <div class="blog-title">
                             <a href="<?php the_permalink() ; ?>"><h2><?php the_title() ; ?></h2></a>
                    </div>   
                    <div class="blog-content">
                        <h3 class="post-subtitle">
                             <?php 
                                $content = get_the_content();
                                $content = strip_tags($content);
                                echo substr($content, 0, 200);
                            ?>
                        </h3>
                    </div>
                    <p class="post-meta">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
</div>
<hr>
                <!-- Pager -->
<?php if ( is_single() ) : ?>
        <p class="pull-left"><?php previous_post_link(); ?></p>
        <p class="pull-right"><?php next_post_link(); ?></p>
    <?php else : ?>
        <ul class="pager">
            <li class="previous">
             <?php previous_posts_link('Previous Post'); ?>
            </li>
            <li class="next">
                <?php next_posts_link('Older Post'); ?>
                <!-- <a href="#">Older Posts &rarr;</a> -->
            </li>
        </ul>
<?php endif; ?> 
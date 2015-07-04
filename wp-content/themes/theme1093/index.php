<?php get_header(); ?>

<?php
if (!is_home()) {
    if (have_posts ()) : ?>
<?php while (have_posts ()) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">



                <div class="indent">
                    <div class="title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
                    <div class="date">Posted by <?php the_author_link() ?>, <?php the_date(''); ?> <?php the_time(''); ?></div>
                    <div class="text-box">
            <?php the_content(''); ?>
        </div>
    </div>


</div>
<?php endwhile; ?>

            <div class="navigation nav-top">
                <div class="alignleft"><?php next_posts_link('&lt;&lt; Older entries') ?></div>
                <div class="alignright"><?php previous_posts_link('Newer entries &gt;&gt;') ?></div>
            </div>

<?php else : ?>
                <h2 class="pagetitle">Not Found</h2>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>
<?php endif;
            } ?>



<?php get_footer(); ?>

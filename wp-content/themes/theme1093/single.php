<?php get_header(); ?>

<?php if (have_posts ()) : while (have_posts ()) : the_post(); ?>
<?php
        $cats = wp_get_post_categories($post->ID);
        $submenusc = "";
        if (in_array(4, $cats) || in_array(5, $cats) || in_array(6, $cats) || in_array(7, $cats)) {
            $submenusc.='jQuery(".menu a:contains(PRENSA)").parent().addClass("current_page");';
            $volver.='<p style="text-align:right!important;"><a style="color:black;" href="javascript:history.back()">&lt; Volver</a></p>';
        }
        if (in_array(4, $cats)) 
            $submenusc.='jQuery(".menu a:contains(Comunicados)").parent().addClass("current_page");';
        if (in_array(6, $cats))
            $submenusc.='jQuery(".menu a:contains(Eventos)").parent().addClass("current_page");';
        if (in_array(7, $cats))
            $submenusc.='jQuery(".menu a:contains(Media Assets)").parent().addClass("current_page");';
        if (in_array(5, $cats))
            $submenusc.='jQuery(".menu a:contains(Noticias)").parent().addClass("current_page");';
?>
        <script type="text/javascript">
<?= $submenusc ?>
        </script>

        <div class="navigation" style="float: none!important;">
            <div class="alignleft"><?php previous_post_link('&lt;&lt;%link') ?></div>
            <div class="alignright"><?php next_post_link('%link&gt;&gt;') ?></div>

        </div>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <div class="indent">



                <div class="title titlemain"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
                <div class="date">Posted by <?php the_author_link() ?>, <?php the_date(''); ?> <?php the_time(''); ?></div>


                <div class="text-box">
            <?php the_content(''); ?>
<?=$volver?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

        </div>

        <div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?></div>

        <div class="postmetadata alt" style="display:none">
            <small>
									This entry was posted
                <?php /* This is commented, because it requires a little adjusting sometimes.
                  You'll need to download this plugin, and follow the instructions:
                  http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
                /* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
									on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
									and is filed under <?php the_category(', ') ?>.
									You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
                <?php if (('open' == $post->comment_status) && ('open' == $post->ping_status)) {
                    // Both Comments and Pings are open ?>
        										You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
                <?php } elseif (!('open' == $post->comment_status) && ('open' == $post->ping_status)) {
                    // Only Pings are Open ?>
        										Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
                <?php } elseif (('open' == $post->comment_status) && !('open' == $post->ping_status)) {
                    // Comments are open, Pings are not ?>
        										You can skip to the end and leave a response. Pinging is currently not allowed.
                <?php } elseif (!('open' == $post->comment_status) && !('open' == $post->ping_status)) {
                    // Neither Comments, nor Pings are open ?>
        										Both comments and pings are currently closed.
                <?php } edit_post_link('Edit this entry', '', '.'); ?>
            </small>
        </div>



        <div class="container"><?php comments_template(); ?></div>
        <br class="clear" />


    </div>

</div>

<?php endwhile;
            else: ?>
                <h2 class="pagetitle">Sorry, no posts matched your criteria.</h2>
<?php endif; ?>



<?php get_footer(); ?>
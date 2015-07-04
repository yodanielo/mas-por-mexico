<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
			
				               
                
                <div class="indent">
                   <div class="title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
                   <div class="date">Posted by <?php the_author_link() ?>, <?php the_date(''); ?> <?php the_time(''); ?></div>
                    <div class="text-box">
                        <?php
                        the_content(''); 
                        $x=get_post_meta($post->ID, "inscripcion",true);
                        if($x=="1"){
                            require 'inscripcion.php';
                        }
                        ?>
                    </div>
                </div>
				
			</div>
		<?php endwhile; endif; ?>


<?php get_footer(); ?>
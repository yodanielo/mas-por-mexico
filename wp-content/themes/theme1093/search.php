<?php get_header(); ?>

		<?php if (have_posts()) : ?>
				
			<div class="title-page02">
				<h2>Search results</h2>
			</div>
	
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&lt;&lt; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &gt;&gt;') ?></div>
				<div class="clear"></div>
			</div>
						
				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style=" width:auto;">
							
						<div class="indent">
                            <div class="container">
                                <img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/images/icon.gif" class="img-left" />
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <div class="date"><?php the_date(''); ?> @ <?php the_time(''); ?> posted by <?php the_author_link() ?></div>
                            </div>
                            
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
			
			<div class="indent bgnone">
				
						
						
							<div class="title-page02">
								<h2>Search result</h2>
							</div>
				
							<div class="search_page">
								<div class="indent bgnone"><div class="text-box">
									<p>No posts found. Try a different search?</p>
									<br />
                                    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>"><div class="indent">
                                                    	<input type="text"  class="input1" value="<?php the_search_query(); ?>" name="s" id="s" onblur="if(this.value=='') this.value='Search:'" onfocus="if(this.value =='Search:' ) this.value=''"  /><input class="but" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search.png" value="submit" />
                                                    </div></form>
                                    <br /><br />
								</div></div>
							</div>
						
					
				
			</div>
			
		<?php endif; ?>


<?php get_footer(); ?>
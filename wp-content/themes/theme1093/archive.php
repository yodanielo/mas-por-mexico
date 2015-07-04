<?php get_header(); ?>

			<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h2 class="pagetitle"><?php single_cat_title(); ?></h2>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h2 class="pagetitle">Archivo de <?php the_time('F jS, Y'); ?></h2>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h2 class="pagetitle">Archivo de <?php the_time('F, Y'); ?></h2>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h2 class="pagetitle">Archive de <?php the_time('Y'); ?></h2>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h2 class="pagetitle">Archive del Autor</h2>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h2 class="pagetitle">Archivos de Blog</h2>
			<?php } ?>
	
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>" style=" float: none;">
				
					
					
					               
                
                <div class="indent">
                   <div class="title"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
                   <div class="date">Posted by <?php the_author_link() ?>, <?php the_date(''); ?> <?php the_time(''); ?></div>
                    <div class="text-box">
                        <?php echo limitar_letras(strip_tags($post->post_content),300); ?>
                    </div>
                </div>
			
			</div>
		<?php endwhile; ?>
		
			<div class="navigation nav-top">
				<div class="alignleft"><?php next_posts_link('&lt;&lt; Older entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer entries &gt;&gt;') ?></div>
			</div>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='pagetitle'>Lo siento, pero aun no hay entradas de la categoría %s.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2 class='pagetitle'>Lo siento, pero no hay entradas con ésta fecha.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='pagetitle'>Lo siento, pero no hay entradas con ésta coincidencia %s.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='pagetitle'>No se encontraron entradas.</h2>");
		}
		//get_search_form();
	
		endif;
	?>
	


<?php get_footer(); ?>
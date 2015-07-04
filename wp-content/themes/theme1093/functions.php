<?php	
require_once 'lib/menu.php';
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => __('Left Sidebar', 'theme1093'),
        'before_widget' => '	<div id="%1$s" class="widget %2$s">',
		'before_title' => '		<div class="title"><h2>',
        'after_title' => '		</h2></div>',				
		'after_widget' => '		</div>',							
));

if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => __('Right Sidebar', 'theme1093'),
       	'before_widget' => '	<div id="%1$s" class="widget %2$s">',
		'before_title' => '		<div class="title"><h2>',
        'after_title' => '		</h2></div>',				
		'after_widget' => '		</div>',								
));
include("widgets_template.php");
// Search
	function widget_theme1093_search() {
?>
	<div id="search" class="widget widget_search">
		<div class="widget-bg"><div class="indent">
				
			<div class="title">
				<h2><?php _e('Site Search','theme1093'); ?></h2>
			</div>
		
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">	
				<input type="text" class="input1" value="<?php the_search_query(); ?>" name="s" id="s" />&nbsp;<input class="but" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search.png" value="submit" />
			</form>
			
		</div></div>
	</div>
					
<?php
}
function limitar_letras($str, $n = 500, $end_char = '&#8230;') {
    if (strlen($str) < $n) {
        return $str;
    }

    $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));

    if (strlen($str) <= $n) {
        return $str;
    }

    $out = "";
    foreach (explode(' ', trim($str)) as $val) {
        $out .= $val.' ';

        if (strlen($out) >= $n) {
            $out = trim($out);
            return (strlen($out) == strlen($str)) ? $out : $out.$end_char;
        }
    }
}
if ( function_exists('register_sidebar_widget') )
	register_sidebar_widget(__('Search'), 'widget_theme1093_search');
?>
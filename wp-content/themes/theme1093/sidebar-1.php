<?php if(!is_home()){ ?>
                          <div class="column-left">
                           <?php 	/* Widgetized sidebar, if you have the plugin installed. */ ?>
		
                                    <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
                                        <li><h2>Author</h2>
                                        <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
                                    </li>
                                    -->
                                    
                                
                                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Left Sidebar','theme1093')) ) : else : ?>	
                            <div class="widget widget_meta">
                                <div class="title"><h2>Meta</h2></div>                        
                                	<ul><?php wp_register(); ?>
                                   
                                    <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
                                    <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
                                    
                                    <?php wp_meta(); ?></ul>
                            </div>
                            <div class="widget widget_archive">
                                <div class="title"><h2>Archive</h2></div>                        
                                 <ul>
									<?php wp_get_archives('type=monthly'); ?>
                                </ul>
                            </div>
                             <? endif; ?>       
                        </div>
<?php } ?>
                        <div class="column-center">
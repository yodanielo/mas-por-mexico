                   
                            
                        </div>
                        <?php if(!is_home()){ ?>
                        <div class="column-right">
                        	<?php 	/* Widgetized sidebar, if you have the plugin installed. */ ?>
		
                                    <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
                                        <li><h2>Author</h2>
                                        <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
                                    </li>
                                    -->
                                    
                                
                            <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(__('Right Sidebar','theme1093')) ) : else : ?>
                            <div class="widget widget_categories">
                                <div class="title"><h2>Categories</h2></div>                        
                                <ul>
									<?php wp_list_categories('show_count=&title_li='); ?>
                                </ul>
                            </div>
                            <? endif; ?>
                        </div>
                        <?php } ?>
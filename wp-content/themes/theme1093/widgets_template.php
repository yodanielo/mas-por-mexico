<?php
/* ----------------------- sub categorias ------------------------------------- */

class WidgetSubPags extends WP_Widget {

    function WidgetSubPags() {
        $widget_ops = array('classname' => 'widget subcats', 'description' => 'Agrega como menú las páginas hijas');
        $this->WP_Widget('widget_subpags', 'D Subcategorias', $widget_ops);
    }

    function widget($args, $instance) {
?>
        <div class="widget widget_meta widget_subcats">
            <ul>

            </ul>
        </div>
        <script type="text/javascript">
            //load_menus();
        </script>
<?php
    }

}

register_widget('WidgetSubPags');

/* ----------------------- banners derecha ------------------------------------ */
class WidgetDerecha extends WP_Widget {

    function  WidgetDerecha(){
        $widget_ops = array('classname' => 'widget derecha', 'description' => 'Muestra los banners laterales en la columna deseada');
        $this->WP_Widget('widget_derecha', 'D Derecha', $widget_ops);
    }

    function widget($args, $instance) {
        global $post;
        $banners=get_post_meta($post->ID, "lateral");
        $cada="";
        $cadb="";
        if(count($banners)>0){
            $cadb='<script type="text/javascript">';
            foreach($banners as $ban){
                $nombre=  "X".rand(0, 10000);
                $cada.='<div class="pbright" id="'.$nombre.'"></div>'."\n";
                $cadb.='hacerright("'.  get_bloginfo("template_directory").'/flash/","'.$ban.'","'.$nombre.'");'."\n";
            }
            $cadb.='</script>';
            echo $cada.$cadb;
        }
    }

}
register_widget('WidgetDerecha');
?>

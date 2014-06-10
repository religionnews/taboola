<?php
// namespace Taboola;

class Taboola{
    function __construct(){
        if(!is_admin()){
            add_action('wp_head', array($this, 'head_script'), 10);
            add_action('r_post_content', array($this, 'post_script'), 90);
            add_action('wp_footer', array($this, 'footer_script'), 10);

        }
    }

    /**
    * outputs the taboola head script
    * @todo localize the url "religionnews" as an option for use elsewhere
    */
    function head_script(){ ?>
        <script type="text/javascript">
 window._taboola = window._taboola || [];
_taboola.push({article:'auto'});
!function (e, f, u) {
    e.async = 1;
    e.src = u;
    f.parentNode.insertBefore(e, f);
}(document.createElement('script'), document.getElementsByTagName('script')[0], 'http://cdn.taboola.com/libtrc/religionnews/loader.js');
</script>
    <?php }

    /**
    * Outputs the taboola placement script
    */
    function post_script(){ ?>
    <div id='taboola-belowarticlethumbnails-mix'></div>
<script type="text/javascript">
window._taboola = window._taboola || [];
_taboola.push({mode:'thumbs-2r', container:'taboola-belowarticlethumbnails-mix', placement:'Below Article Thumbnails', target_type:'mix'});
</script>
    <?php }

    /**
    * outputs the taboola footer script
    */
    function footer_script(){ ?>
        <script>
window._taboola = window._taboola || [];
_taboola.push({flush:true});
</script>
    <?php }
}

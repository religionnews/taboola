<?php

/*
* Plugin Name: Taboola (RNS)
* Description: A very down and dirty approach to integrating Taboola
* Version: 0.0.2
* Plugin Author: Russell Fair
*/

add_action('plugins_loaded', 'taboola_load');
/**
* Loads all fo the Taboola Class
*/
function taboola_load(){
    require_once('taboola_core.php');
    new Taboola;
}

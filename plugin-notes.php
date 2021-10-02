<?php

/**
 * Plugin Name:     Plugin Notes
 * Plugin URI:      https://www.planetnine.tech/
 * Description:     
 * Author:          Brian Penner
 * Author URI:      https://www.planetnine.tech/
 * Text Domain:     plugin-notes
 * Domain Path:     /languages
 * Version:          0.1.0
 *
 * @package plugin-notes
 */

class pluginNotes
{
    public function hooks()
    {
    }
    /* 
    * 
    */
    public function __construct()
    {
        add_action('acf/init', [$this, 'addOptionsPage']);
    }

    public function addOptionsPage()
    {
        acf_add_options_page([
            'page_title' => 'Plugin Notes'
        ]);
    }
}
$pluginNotes = new PluginNotes();

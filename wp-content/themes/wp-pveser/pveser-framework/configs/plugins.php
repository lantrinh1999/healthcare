<?php
function pveser_plugin_activation() {

        $plugins = array(
                array(
                        'name' => 'Redux Framework',
                        'slug' => 'redux-framework',
                        'required' => true
                )

        );
 
        // Thiet lap TGM
        $configs = array(
                'menu' => 'pveser_plugin_install',
                'has_notice' => true,
                'dismissable' => false,
                'is_automatic' => true
        );
        tgmpa( $plugins, $configs );
 
}
add_action('tgmpa_register', 'pveser_plugin_activation');
?>

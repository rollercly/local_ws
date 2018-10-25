<?php
function local_ws_prueba_extends_settings_navigation(settings_navigation $nav, context $context){
    global $USER, $PAGE;
    $parent = $settingsnav->find('usercurrentsettings', navigation_node::TYPE_CONTAINER);
    $url = new moodle_url('/mod/stag/account.php', array('id'=>$USER->id));
    $stagref = navigation_node::create("New node", $url, navigation_node::TYPE_SETTING,'newnode','newnode');
    $parent->add_node($stagref, 1);
    
}

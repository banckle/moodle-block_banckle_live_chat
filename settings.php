<?php
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtextarea('blc_script', get_string('blc_script_txt', 'block_banckle_live_chat'),
        get_string('blc_description', 'block_banckle_live_chat'), '', PARAM_RAW));    
}


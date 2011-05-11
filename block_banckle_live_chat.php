<?php

class block_banckle_live_chat extends block_base {

    function init() {
        $this->title = get_string('bancklelivechat', 'block_banckle_live_chat');
    }

    function has_config() {
        return true;
    }

    function config_save($data) {
        // Default behavior: save all variables as $CFG properties
        foreach ($data as $name => $value) {
            set_config($name, $value);
        }
        return true;
    }

    function instance_allow_multiple() {
        // Are you going to allow multiple instances of each block?
        // If yes, then it is assumed that the block WILL USE per-instance configuration
        return FALSE;
    }

//function preferred_width() {
//  // Default case: the block wants to be 180 pixels wide
//  return 180;
//}

    function get_content() {
        global $CFG;

        $widthBlock = $this->preferred_width();

        if ($this->content !== NULL) {
            return $this->content;
        }

        $css = '<style type="text/css">
                    #banckleLiveChatButton{width: '.($widthBlock-10).'px;}
                    #banckleLiveChatButton img{width:'.($widthBlock-10).'px;}
                </style>';
        $script = "";

        if (isset($CFG->blc_script)) {
            $script = $CFG->blc_script;
        }

        $this->content = new stdClass;
        $this->content->text = $css . "<div id='banckleLiveChatButton'>" . $script. "</div>";

        //$this->content->footer = 'Footer here...';

        return $this->content;
    }

//    function html_attributes() {
//  return array(
//    'class'       => 'sideblock block_'. $this->name(),
//    'onmouseover' => "alert('Mouseover on our block!');"
//  );
//}
}
?>
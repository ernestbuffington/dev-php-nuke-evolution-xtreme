<?php

/*
|-----------------------------------------------------------------------
|	AUTHOR 				:	jQuery
|	VERSION 			:	3.5.1
|----------------------------------------------------------------------
*/

if(!defined('NUKE_FILE')) 
	die('Access forbbiden');

global $wysiwyg;

add_css_to_head(NUKE_CSS_DIR.'fontawesome/all.css','file', '5.8.1');
add_css_to_head(NUKE_CSS_DIR.'fontawesome/font-awesome-animation.min.css','file');
if ( defined('ENABLE_JQUERY_UI') ):
	add_css_to_head(NUKE_CSS_DIR.'jquery.ui.css','file', '1.12.0');
endif;
add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'html5shiv.min.js','file', '3.7.3');

add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery.min.js','file', '3.5.1');
if ( defined('ENABLE_JQUERY_UI') ):
	add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery-ui.min.js','file', '1.12.0');
endif;
add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery-migrate.min.js','file', '3.0.0');

$JStoHead  = '<script type="text/javascript">'.PHP_EOL;
$JStoHead .= '  var nuke_jq 	= jQuery.noConflict();'.PHP_EOL;
if(is_admin())
	$JStoHead .= '  var admin_file 	= "'.$admin_file.'";'.PHP_EOL;
$JStoHead .= '</script>'.PHP_EOL;
add_js_to_head($JStoHead,'inline');

// addJSToHead(NUKE_JQUERY_SCRIPTS_DIR.'jquery.letter.avatar.js','file');
add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery.easing.min.js','file');
add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery.fn.extend.js','file');
add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery.core.js','file');

add_css_to_head(NUKE_CSS_DIR.'cookieconsent.min.css','file');
add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'cookieconsent.min.js','file');
$cookieconsent_inline  = '<script>';
$cookieconsent_inline .= 'window.addEventListener("load", function(){';
$cookieconsent_inline .= 'window.cookieconsent.initialise({';
$cookieconsent_inline .= '  "palette": {';
$cookieconsent_inline .= '    "popup": {';
$cookieconsent_inline .= '      "background": "#000",';
$cookieconsent_inline .= '      "text": "#0f0"';
$cookieconsent_inline .= '    },';
$cookieconsent_inline .= '    "button": {';
$cookieconsent_inline .= '      "background": "#0f0"';
$cookieconsent_inline .= '    }';
$cookieconsent_inline .= '  },';
$cookieconsent_inline .= '  "theme": "classic"';
$cookieconsent_inline .= '})});';
$cookieconsent_inline .= '</script>';
add_js_to_head($cookieconsent_inline,'inline');

$progress_bar_loading  = '<script type="text/javascript">'.PHP_EOL;
$progress_bar_loading .= 'nuke_jq(function($)';
$progress_bar_loading .= '{';
$progress_bar_loading .= '	$(".progress-bar > span").each(function() {$(this).width(0).animate({width: $(this).data("percentage")+"%"}, 1200);});';
$progress_bar_loading .= '});';
$progress_bar_loading .= '</script>'.PHP_EOL;
add_js_to_body($progress_bar_loading,'inline');

add_js_to_head(NUKE_JQUERY_SCRIPTS_DIR.'jquery.marquee.js','file');
$jquery_marquee  = '<script type="text/javascript">'.PHP_EOL;
$jquery_marquee .= 'nuke_jq("[data-marquee]").marquee({
    direction: "up",
});';
$jquery_marquee .= '</script>'.PHP_EOL;
add_js_to_body($jquery_marquee,'inline');

?>
<?php

/**
 * Template Class
 *
 * Generate the template base on business logic
 *
 * @licence 	MIT Licence
 * @category	Library
 * @author  	Andgate Technologies
 * @link    	http://www.andgateit.com
 * @version 	1.0.0
 */
// --------------------------------------------------------------------------

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template {

    var $CI;
    var $template_path;
    var $layout;

    function __construct() {
	$this->CI = & get_instance();
	$this->template_path = 'visitor';
	$this->layout = 'home';
    }

    function setLayout($layout) {
	$this->layout = $layout;
    }

    function setTemplatePath($path) {
	$this->$template_path = $path;
    }

    function view($layout=NULL, $data=NULL, $template=NULL) {
	// CHECK LAYOUT SET OR NOT
	if (!empty($layout)) {
	    $this->setLayout($layout);
	}

	// CHECK LAYOUT SET OR NOT
	if (!empty($template)) {
	    $this->setTemplatePath($template);
	}

	// CHECK DATA SET OR NOT  
	$template = $this->template_path . "/" . $this->layout;
	if (!empty($data)) {
	    $output = $this->CI->load->view($template, $data);
	} else {
	    $output = $this->CI->load->view($template);
	}
	return $output;
    }

}


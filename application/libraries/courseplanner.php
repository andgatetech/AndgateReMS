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
 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Courseplanner
{
    
    var $CI;
    var $template_path;
    var $layout;
    
    function __construct()
    {
        $this->CI =& get_instance();
	
    }

    function setLayout($layout)
    {
      $this->layout = $layout;
    }
    
    function setTemplatePath($path)
    {
      $this->$template_path = $path;
    }
    
    function view($data=NULL)
    {
        
        
	    $template = $this->template_path."/". $this->layout;
	    if(!empty ($data))
	    {
            $output = $this->CI->load->view($template,$data);
	    }else{
		 $output = $this->CI->load->view($template);
	    }
            return $output;
        
         
       
    }
    
    
    function panel_header($data)
    {
        
        
	    $template = $this->template_path."/". $this->layout;
            $output = $this->CI->load->view($template,$data);
            return $output;
        
         
       
    }
    function panel_footer($data)
    {
   	    $template = $this->template_path."/". $this->layout;
            $output = $this->CI->load->view($template,$data);
            return $output;
      
    }
    
    
    function html_header($data)
    {
        
	    $this->layout = "header";
	    $template = $this->template_path."/". $this->layout;
            $output = $this->CI->load->view($template,$data);
            return $output;
        
         
       
    }
}
?> 
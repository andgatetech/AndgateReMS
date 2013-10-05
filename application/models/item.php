<?php

/**
 * User Class
 *
 * Transforms users table into an object.
 * This is just here for use with the example in the Controllers.
 *
 * @licence 	MIT Licence
 * @category	Models
 * @author  	Simon Stenhouse
 * @link    	http://stensi.com
 */
class Item extends DataMapper {

    var $table = 'items';
	var $has_one = array('item_category');
    
    var $default_order_by = array('updated_on' => 'desc');
    
    
    var $created_field = 'created_on';
    var $updated_field = 'updated_on';

    // Optionally, don't include a constructor if you don't need one.
    function __construct($id = NULL)
    {
        parent::__construct($id);
    }

    // Optionally, you can add post model initialisation code
    function post_model_init($from_cache = FALSE)
    {
    }
}

/* End of file user.php */
/* Location: ./application/models/user.php */
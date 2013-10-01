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
class User extends DataMapper {

    var $table = 'users';
    
    //var $has_one = array('student','faculty');
    //var $has_many = array('user_type');
    
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
    
     function login()
    {
        // backup username for invalid logins
        $user_name = $this->name;
	$password = $this->password;
	//echo $user_name;
        //echo "<br>".$password;
       //exit;
        // Create a temporary user object
        $user = new User();

        // Get this users stored record via their username
        $user->where('name', $user_name);
	$user->where('password', $password);
	//$user->get();
        

        // Give this user their stored salt
       //$this->salt = $u->salt;

        // Validate and get this user by their property values,
        // this will see the 'encrypt' validation run, encrypting the password with the salt
        $this->validate()->get();

        // If the username and encrypted password matched a record in the database,
        // this user object would be fully populated, complete with their ID.

        // If there was no matching record, this user would be completely cleared so their id would be empty.
        if ($this->exists())
        {
            // Login succeeded
            return TRUE;
        }
        else
        {
            // Login failed, so set a custom error message
           // $this->error_message('login', 'Username or password invalid');

            // restore username for login field
            //$this->username = $uname;

            return FALSE;
        }
    }
}

/* End of file user.php */
/* Location: ./application/models/user.php */
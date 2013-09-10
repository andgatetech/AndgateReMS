<?php

/**
 * Upload Class
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

class Andgate_upload {

    var $upload_folder_path;
    var $upload_thumb_folder_path;
    var $allowed_file_type;
    var $max_size;
    var $image_width;
    var $image_height;
    var $thumb_image_width;
    var $thumb_image_height;

    function __construct() {
	$this->CI = & get_instance();
	// SET THE UPLAOD PATH
	$this->upload_folder_path = './assets/uploads/resource';
	//SET THE THUMB PATH
	$this->upload_thumb_folder_path = "./assets/uploads/resource/thumb/";
	//SET ALLOWER FILE TYPE
	$this->allowed_file_type = 'gif|jpg|png|txt|pdf|doc|docx|mp3|mpeg|avi|dat|ppt';

//SET MAXIMUM FILE UPLOAD SIZE
	$this->max_size = 100000;

// SET IMAGE WIDTH

	$this->image_width = "700";
	//SET IMAGE HEIGHT
	$this->image_height = "300";
	// SET THUMB WIDTH
	$this->thumb_image_width = "618";
	// SET THUMB HEIGHT
	$this->thumb_image_height = "246";
    }

    function index() {
	//$this->load->model('upload_model');
	//$data['gallary'] = $this->upload_model->gallary_get_all_entries();
	$this->load->view('upload_form', array('error' => ' '));
    }

    public function change_settings_upload_path($path = NULL) {
	if (!empty($path)) {
	    $this->upload_folder_path = $path;
	}
    }

    public function do_upload() {
	$rs = $this->file_upload();
	return $rs;
    }

    private function file_upload() {


	$config = array(
	    'upload_path' => $this->upload_folder_path,
	    'allowed_types' => $this->allowed_file_type,
	    'image_height' => $this->image_height,
	    'image_width' => $this->image_width,
	);

	$this->CI->load->library('upload', $config);

	if (!$this->CI->upload->do_upload()) {
	    $error = array('error' => $this->CI->upload->display_errors());
	    //$this->load->view('upload_form', $error);
	    print_r($error);
	} else {

	    $configThumb = array();
	    $configThumb['image_library'] = 'gd2';
	    $configThumb['source_image'] = '';
	    $configThumb['create_thumb'] = TRUE;
	    $configThumb['maintain_ratio'] = FALSE;
	    $configThumb['new_image'] = $this->upload_thumb_folder_path;
	    /* Set the height and width or thumbs */
	    /* Do not worry - CI is pretty smart in resizing */
	    /* It will create the largest thumb that can fit in those dimensions */
	    /* Thumbs will be saved in same upload dir but with a _thumb suffix */
	    /* e.g. 'image.jpg' thumb would be called 'image_thumb.jpg' */
	    $configThumb['width'] = $this->thumb_image_width;
	    $configThumb['height'] = $this->thumb_image_height;
	    /* Load the image library */
	    $this->CI->load->library('image_lib');
	    $upload_data = $this->CI->upload->data();
	    if ($upload_data['is_image'] == 1) {
		$configThumb['source_image'] = $upload_data['full_path'];
		$this->CI->image_lib->initialize($configThumb);
		$this->CI->image_lib->resize();
	    }

	    $data_ary = array(
		'title' => $upload_data['file_name'],
		'path' => $upload_data['full_path'],
	    );
	    //$this->db->insert('resources', $data_ary);
	    //$data = array('upload_data' => $upload_data);
	    //$this->load->view('upload_success', $data);
	    return $upload_data;
	}
    }

}

?>
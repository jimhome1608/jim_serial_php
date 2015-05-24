<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "create";
$route['404_override'] = '';

$route['create'] = "create/index";
$route['(:any)'] = "go/index";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
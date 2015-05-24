<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Urls_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function save_url($data) {

    $query = "INSERT INTO `write_to_port` (`command`, `command_result`) VALUES (?,?) ";
    if (rand(0,1) ==0)
       $result = $this->db->query($query, array('{000FF0000}', ''));
    else 
       $result = $this->db->query($query, array('{000000000}', ''));
  }

}

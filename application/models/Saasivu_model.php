<?php
class Saasivu_model extends CI_model
{
  public function get_weather(){
       $this->db->select('*');
       $this->db->from('saatila');
       return $this->db->get()->result_array();
     }


}

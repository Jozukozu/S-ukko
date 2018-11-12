<?php
class Saasivu_model extends CI_model
{
  public function get_weather(){
    $this->db->select('*');
    $this->db->from('saatila');
    return $this->db->get()->result_array();
  }

  public function get_vkpaiva(){
    $this->db->select('vkpaiva');
    $this->db->from('saatila');
    return $this->db->get()->result_array();
  }

  public function get_anturidata(){
    $this->db->select('saa, lampo, sade, kosteus, valo, ilmanpaine');
    $this->db->from('saatila');
    return $this->db->get()->result_array();
  }

  public function get_nykytila(){
    $this->db->select('saa, lampo, sade, kosteus, valo, ilmanpaine');
    $this->db->from('saatila');
    $this->db->order_by('idsaatila', 'desc');
    $this->db->limit(1);
    return $this->db->get()->result_array();
  }

  public function get_nykytila_aika(){
    $this->db->select('pvm, vkpaiva, kello');
    $this->db->from('saatila');
    $this->db->order_by('idsaatila', 'desc');
    $this->db->limit(1);
    return $this->db->get()->result_array();
  }

}

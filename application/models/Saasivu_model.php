<?php
class Saasivu_model extends CI_model
{
  public function get_weather($i){
    $id0 = 9999999;
    $this->db->select('pvm');
    $this->db->from('saatila');
    $this->db->where('idsaatila =', 0);
    $pvm = $this->db->get()->result_array();
    $pvm0 = $pvm[0]['pvm'];
    if ($i != 0)
    {
    for($j = 1; $j < $i + 1; $j++){
      $this->db->select('idsaatila, pvm');
      $this->db->from('saatila');
      $this->db->where('pvm !=', $pvm0);
      $this->db->where('idsaatila <', $id0);
      $this->db->order_by('idsaatila', 'desc');
      $this->db->limit(1);
      $pvm = $this->db->get()->result_array();
      $pvm0 = $pvm[0]['pvm'];
      $id0 = $pvm[0]['idsaatila'];
    }
  }
    $this->db->select('*');
    $this->db->from('saatila');
    $this->db->where('pvm =', $pvm0);
    if($i == 0)
    {
    $this->db->order_by('idsaatila', 'desc');
  }
    return $this->db->get()->result_array();
  }

  public function get_vkpaiva(){
    $this->db->select('vkpaiva');
    $this->db->from('saatila');
    return $this->db->get()->result_array();
  }

  public function get_anturidata(){
    $this->db->select('lampo, sade, kosteus, valo, ilmanpaine');
    $this->db->from('saatila');
    return $this->db->get()->result_array();
  }

  public function get_nykytila(){
    $this->db->select('lampo, sade, kosteus, valo, ilmanpaine');
    $this->db->from('saatila');
    $this->db->where('idsaatila', 0);
    return $this->db->get()->result_array();
  }

  public function get_nykytila_aika(){
    $this->db->select('pvm, vkpaiva, kello');
    $this->db->from('saatila');
    $this->db->where('idsaatila', 0);
    return $this->db->get()->result_array();
  }

  public function get_prev_pv($id){
    $this->db->select('pvm');
    $this->db->from('saatila');
    $this->db->where('idsaatila', $id);
    $pvm = $this->db->get()->result();
    $this->db->select('pvm, vkpaiva, idsaatila');
    $this->db->from('saatila');
    $this->db->where('pvm', $pvm, FALSE);
    $this->db->where('idsaatila <', $id);
    $this->db->order_by('idsaatila', 'desc');
    $this->db->limit(1);
    return $this->db->get()->result_array();
  }

  public function get_newest_id(){
    $this->db->select('idsaatila');
    $this->db->from('saatila');
    $this->db->order_by('idsaatila', 'desc');
    $this->db->limit(1);
    return $this->db->get()->result();
  }

}

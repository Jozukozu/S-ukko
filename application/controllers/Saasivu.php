<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saasivu extends CI_Controller {

  public function etusivu(){
    $data['page']='saasivu/etusivu';
    $this->load->view('menu/content',$data);
  }

  public function show_weather(){
    $this->load->model('Saasivu_model');
    $data['nykytila']=$this->Saasivu_model->get_nykytila();
    $data['nykytila_aika']=$this->Saasivu_model->get_nykytila_aika();
    $data['saatila']=$this->Saasivu_model->get_weather(0);
    $data['page']='saasivu/show_weather';
    $this->load->view('menu/content',$data);
  }

  public function show_weather_history($i){
    $this->load->model('Saasivu_model');
    $data['saatila']=$this->Saasivu_model->get_weather($i);
    $data['page']='saasivu/show_weather_history';
    $this->load->view('menu/content',$data);
  }
}

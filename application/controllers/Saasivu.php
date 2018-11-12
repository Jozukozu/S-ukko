<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saasivu extends CI_Controller {

  public function etusivu(){
    $data['page']='saasivu/etusivu';
    $this->load->view('menu/content',$data);
  }

  public function show_weather(){
    $this->load->model('Saasivu_model');
    $data['saatila']=$this->Saasivu_model->get_weather();
    $data['page']='saasivu/show_weather';
    $this->load->view('menu/content',$data);
  }

  public function show_weather_history(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/show_weather_history';
    $this->load->view('menu/content',$data);
  }

  public function maanantai(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/maanantai';
    $this->load->view('menu/content',$data);
  }
  public function tiistai(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/tiistai';
    $this->load->view('menu/content',$data);
  }
  public function keskiviikko(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/keskiviikko';
    $this->load->view('menu/content',$data);
  }
  public function torstai(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/torstai';
    $this->load->view('menu/content',$data);
  }
  public function perjantai(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/perjantai';
    $this->load->view('menu/content',$data);
  }
  public function lauantai(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/lauantai';
    $this->load->view('menu/content',$data);
  }
  public function sunnuntai(){
    $this->load->model('Saasivu_model');
    $data['page']='saasivu/sunnuntai';
    $this->load->view('menu/content',$data);
  }
}

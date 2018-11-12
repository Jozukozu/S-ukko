<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saasivu extends CI_Controller {

  public function etusivu(){
      $data['page']='saasivu/etusivu';
      $this->load->view('menu/content',$data);
    }

  public function show_weather(){
        $this->load->library('image_lib');
        $data['page']='saasivu/show_weather';
        $this->load->view('menu/content',$data);
    }

  public function show_weather_history(){
          $data['page']='saasivu/show_weather_history';
          $this->load->view('menu/content',$data);
    }
}

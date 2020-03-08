<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){

      $data = [
        'title' => 'Pharmacy',
        'description' => 'Simple social network built on the TraversyMVC PHP framework'
      ];
     
      $this->view('pages/index', $data);
    }

    public function notreLaboratoire(){
      $data = [
        'title' => 'Notre Laboratoire',
      ];

      $this->view('pages/notreLaboratoire', $data);
    }
    public function nousrejoindre(){
      $data = [
        'title' => 'Nous Rejoindre',
      ];

      $this->view('pages/nousrejoindre', $data);
    }
  }
  
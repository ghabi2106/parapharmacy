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
    public function notreblog(){
      $data = [
        'title' => 'Notre Blog',
      ];

      $this->view('pages/notreblog', $data);
    }
    public function nosguides(){
      $data = [
        'title' => 'Nos Guides',
      ];

      $this->view('pages/nosguides', $data);
    }
    public function nouscontacter(){
      $data = [
        'title' => 'Nous Contacter',
      ];

      $this->view('pages/nouscontacter', $data);
    }

  
    public function dermatologie(){
      $data = [
        'title' => 'Dermatologie',
      ];

      $this->view('pages/dermatologie', $data);
    }

    public function fermentslactiques(){
      $data = [
        'title' => 'Ferments Lactiques',
      ];

      $this->view('pages/fermentslactiques', $data);
    }

    public function nutritioninfantile(){
      $data = [
        'title' => 'Nutrition Infantile',
      ];

      $this->view('pages/nutritioninfantile', $data);
    }

    public function orl(){
      $data = [
        'title' => 'ORL',
      ];

      $this->view('pages/orl', $data);
    }

    public function pneumologie(){
      $data = [
        'title' => 'Pneumologie',
      ];

      $this->view('pages/pneumologie', $data);
    }

}
  
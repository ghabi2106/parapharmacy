<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->categoryModel = $this->model('Category');
  }

  public function index()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Pharmacy',
      'description' => 'Simple social network built on the TraversyMVC PHP framework',
      'name' => 'pages-index'
    ];

    $this->view('pages/index', $data);
  }

  public function notreLaboratoire()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Notre Laboratoire',
      'name' => 'pages-notrelaboratoire'
    ];

    $this->view('pages/notreLaboratoire', $data);
  }

  public function nousrejoindre()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Nous Rejoindre',
      'name' => 'pages-nousrejoindre'
    ];

    $this->view('pages/nousrejoindre', $data);
  }

  public function notreblog()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Notre Blog',
      'name' => 'pages-notreblog'
    ];

    $this->view('pages/notreblog', $data);
  }

  public function nosguides()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Nos Guides',
      'name' => 'pages-nosguides'
    ];

    $this->view('pages/nosguides', $data);
  }

  public function nouscontacter()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Nous Contacter',
      'name' => 'pages-nouscontacter'
    ];

    $this->view('pages/nouscontacter', $data);
  }

  public function ouacheter()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Ou acheter',
      'name' => 'pages-ouacheter'
    ];

    $this->view('pages/ouacheter', $data);
  }
}

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
      'description' => 'Simple social network built on the TraversyMVC PHP framework'
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
    ];

    $this->view('pages/nouscontacter', $data);
  }

  public function dermatologie()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Dermatologie',
    ];

    $this->view('pages/dermatologie', $data);
  }

  public function fermentslactiques()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Ferments Lactiques',
    ];

    $this->view('pages/fermentslactiques', $data);
  }

  public function nutritioninfantile()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Nutrition Infantile',
    ];

    $this->view('pages/nutritioninfantile', $data);
  }

  public function orl()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'ORL',
    ];

    $this->view('pages/orl', $data);
  }

  public function pneumologie()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Pneumologie',
    ];

    $this->view('pages/pneumologie', $data);
  }
}

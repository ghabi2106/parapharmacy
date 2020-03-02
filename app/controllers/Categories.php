<?php

use voku\helper\Paginator;

class Categories extends Controller
{
  public function __construct()
  {
    $this->categoryModel = $this->model('Category');
    $this->pharmaceuticalModel = $this->model('Pharmaceutical');
  }

  public function index()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();
    $colors = array("theme-green", "theme-orange", "theme-blue", "theme-blue", "theme-purple", "theme-green", "theme-yellow");

    $data = [
      'categories' => $categories,
      'colors' => $colors
    ];

    $this->view('categories/index', $data);
  }

  public function show($id)
  {
    // create a new object
    $pages = new Paginator('10', 'p');

    // set the total records, calling a method to get the number of records from a model
    $total = $this->pharmaceuticalModel->getBycategoryId_count($id);
    $pages->set_total($total);

    // calling a method to get the records with the limit set
    $pharmaceuticals = $this->pharmaceuticalModel->getBycategoryId_pagination($id, $pages->get_limit());

    // create the nav menu
    $page_links = $pages->page_links();

    $category = $this->categoryModel->getCategoryById($id);

    $data = [
      'category' => $category,
      'pharmaceuticals' => $pharmaceuticals,
      'page_links' => $page_links
    ];
    $this->view('categories/show', $data);
  }
}

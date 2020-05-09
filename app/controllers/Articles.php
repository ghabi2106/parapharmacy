<?php
class Articles extends Controller
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
      'description' => 'Articles Index',
      'name' => 'articles-index'
    ];

    $this->view('pages/index', $data);
  }

  public function huiles()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $data = [
      'categories' => $categories,
      'title' => 'Huiles cosmétiques',
      'description' => 'Articles Huiles',
      'name' => 'articles-huiles'
    ];

    $this->view('articles/huiles', $data);
  }
}

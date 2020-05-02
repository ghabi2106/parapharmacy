<?php
class Pharmaceuticals extends Controller
{
  public function __construct()
  {
    $this->pharmaceuticalModel = $this->model('Pharmaceutical');
  }

  public function index()
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    // Get pharmaceuticals
    $pharmaceuticals = $this->pharmaceuticalModel->getPharmaceuticals();

    $data = [
      'categories' => $categories,
      'pharmaceuticals' => $pharmaceuticals
    ];

    $this->view('pharmaceuticals/index', $data);
  }

  public function show($id)
  {
    // Get categories
    $categories = $this->categoryModel->getCategories();

    $pharmaceutical = $this->pharmaceuticalModel->getPharmaceuticalById($id);

    $data = [
      'categories' => $categories,
      'pharmaceutical' => $pharmaceutical,
    ];

    $this->view('pharmaceuticals/show', $data);
  }
}

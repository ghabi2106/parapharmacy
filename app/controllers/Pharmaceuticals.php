<?php
class Pharmaceuticals extends Controller
{
  public function __construct()
  {
    $this->pharmaceuticalModel = $this->model('Pharmaceutical');
  }

  public function index()
  {
    // Get pharmaceuticals
    $pharmaceuticals = $this->pharmaceuticalModel->getPharmaceuticals();

    $data = [
      'pharmaceuticals' => $pharmaceuticals
    ];

    $this->view('pharmaceuticals/index', $data);
  }

  public function show($id)
  {
    $pharmaceutical = $this->pharmaceuticalModel->getPharmaceuticalById($id);

    $data = [
      'pharmaceutical' => $pharmaceutical,
    ];

    $this->view('pharmaceuticals/show', $data);
  }
}

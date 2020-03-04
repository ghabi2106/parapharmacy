<?php
class Pharmaceutical
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getPharmaceuticalById($id)
  {
    $this->db->query('SELECT 
    pharmaceuticals.*,
    categories.id as categoryId,
    categories.title as categoryTitle
    FROM pharmaceuticals    
    INNER JOIN categories
    ON pharmaceuticals.category_id = categories.id
    WHERE pharmaceuticals.id = :id
    ');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function getBycategoryId($category_id)
  {
    $this->db->query('SELECT * FROM pharmaceuticals WHERE category_id = :category_id');
    $this->db->bind(':category_id', $category_id);

    $results = $this->db->resultSet();

    return $results;
  }

  public function getBycategoryId_pagination($category_id, $limit_num)
  {
    $this->db->query('SELECT pharmaceuticals.*, pharmaceutical_details.* FROM pharmaceuticals 
      INNER JOIN pharmaceutical_details
      ON pharmaceuticals.id = pharmaceutical_details.id
      WHERE category_id = :category_id ' . $limit_num);
    $this->db->bind(':category_id', $category_id);

    $results = $this->db->resultSet();

    return $results;
  }

  public function getBycategoryId_count($category_id)
  {
    $this->db->query('SELECT id FROM pharmaceuticals WHERE category_id = :category_id');
    $this->db->bind(':category_id', $category_id);

    $count = $this->db->rowCount();

    return $count;
  }
}

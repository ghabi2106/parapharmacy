<?php
  class Category {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getCategories(){
      $this->db->query('SELECT *
                        FROM categories
                        ORDER BY categories.created_at DESC
                        ');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getCategoryById($id){
      $this->db->query('SELECT * FROM categories WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }
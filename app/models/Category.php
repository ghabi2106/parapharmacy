<?php
  class Category {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getCategories(){
      $this->db->query('SELECT *
                        FROM categories
                        ORDER BY categories.created_at ASC
                        ');

      $results = $this->db->resultSet();

      return $results;
    }

    public function getCategoryById($id){
      $this->db->query('SELECT categories.*, category_details.* FROM categories 
      INNER JOIN category_details
      ON categories.id = category_details.id
      WHERE categories.id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }
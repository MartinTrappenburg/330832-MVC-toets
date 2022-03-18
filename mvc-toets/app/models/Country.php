<?php
  class Country{
    private $db;
    
    public function __construct() {
        $this->db = new Database;

    }

    public function getCountries() {
        $this->db->query("SELECT * FROM `countries`");
        $result = $this->db->resultSet();

        return $result;
    }
  }  
?>
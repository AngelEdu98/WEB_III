<?php

class ejemplo{
    private $db;

    public function __construct(){
        $this->db = new Base;
    }

    public function get_Priv(){
        $this->db->query('SELECT * FROM `privilegios`');
        return $this->db->registers();
    }
}
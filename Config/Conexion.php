<?php 
    class Conexion{
        private $url;
        private $db;

        public function __construct(){
            $this->url = "https://backendtest.odoo.com/";
            $this->db = "backendtest";
        }

        public function getUrl()
        {
            return $this->url;
        }

        public function getDb()
        {
            return $this->db;
        }

    }
?>
<?php
    class Supplierquotes {
        // 
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        /* Test (database and table needs to exist before this works) */
        public function getSupplierquotes() {
            $this->db->query("SELECT * FROM supplier_qoutes");

            $result = $this->db->resultSet();

            return $result;
        }
    }
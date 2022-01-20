<?php

class Everything {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        /* Test (database and table needs to exist before this works) */
        // GET EVERYTHING IN THE database
        public function getEverything() {
            $result= [];
            // Store table names in an array
            // Need to add enquiries table here
            $tablenames = ["supplier_qoutes","customer_qoutes","supplier_purchaseorders2","customer_purchaseorders2",
            "supplier_invoices2","customer_invoices2","supplier_deliverynotes2","customer_deliverynotes2" 
            ];

            // Looping through the table names array and collecting data to an array
            for ($i=0; $i < count($tablenames); $i++) { 
                # code...
                // echo $tablenames[$i];
                // The table to get data from :execute the query
                $this->db->query("SELECT * FROM ".$tablenames[$i]);

                // store the result in an array
                array_push($result, $this->db->resultSet());
                // $result = $this->db->resultSet();
            }

            return $result;
        }
    }
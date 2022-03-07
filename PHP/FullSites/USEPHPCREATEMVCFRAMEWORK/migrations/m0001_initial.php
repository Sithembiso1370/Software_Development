<?php
/**
 * User: Sithembiso 
 * Date: 7/12/2021
 * Time: 19:18 AM
 * Last modified: 28/01/2022
 */

class m0001_initial {

    public function up(){
        // Access database
        $db = \app\core\Application::$app->db;

        // Create SQL statement
        $SQL = "
            CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                status TINYINT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;
        ";

        // execute a sql statement
        $db->pdo->exec($SQL);
    }



    // Do the reverse of what I do in the Up
    public function down(){
        // Access database
        $db = \app\core\Application::$app->db;

        // Create SQL statement
        $SQL = " DROP TABLE users ;";

        // execute a sql statement
        $db->pdo->exec($SQL);
    }
}
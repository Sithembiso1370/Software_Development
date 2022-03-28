<?php
/**
 * User: Sithembiso 
 * Date: 7/12/2021
 * Time: 19:18 AM
 * Last modified:03/02/2022
 * Times modified: 2
 */


class m0002_add_password_column {

    public function up(){
        // Access database
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    // Do the reverse of what I do in the Up
    public function down(){
        // Access database
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN password");
    }
    
}
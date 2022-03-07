<?php
/**
 * User: Sithembiso 
 * Date: 03/02/2022
 * Time: 20:41 AM
 * No of time modified : 1
 * Last modified: 03/02/2022
 */


class m0003_something {

    public function up(){
        // Access database
        $db = \app\core\Application::$app->db;
    }

    // Do the reverse of what I do in the Up
    public function down(){
        // Access database
        $db = \app\core\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN password");
    }
    
}
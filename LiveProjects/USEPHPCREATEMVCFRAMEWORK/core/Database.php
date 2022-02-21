<?php
/**
 * @author Sithembiso Maphanga
 * 
 * User: Sithembiso 
 * Date: 7/12/2021
 * Time: 19:18 AM
 * Last modified: 28/01/2022
 */

 namespace app\core;



 /**
 * Class Database
 *
 * @author Sithembiso Maphanga
 * @package app\core
 */

 class Database
 {
     public \PDO $pdo;


    /**
     * Database Constructor
     * @author Sithembiso Maphanga
     * @package app/core
     */

    //  GETS THE ENVIRONMENT VARIABLES  AS PARAMETERS AND EXTRACTS THEM TO THE  PDO OBJECT
     public function __construct(array $config)
     {
        //  Extract the Database parameters
         $dsn = $config['dsn'] ?? '';
         $user = $config['user'] ?? '';
         $password = $config['password'] ?? '';

        //  Create an instance of a Connection to the database and pass in the dsn , username , password as parameters
        // to the constructor of the PDO class
         $this->pdo = new \PDO($dsn, $user, $password);

        //  Catch the Exeption thrown if an error in connection occurs
         $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
     }
    //  END CONSTRUCTOR



     public function applyMigrations(){

        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();

        // check for list of files in this directory
        $files = scandir(Application::$ROOT_DIR.'\migrations');

        $toApplyMigrations  = array_diff($files,$appliedMigrations);



        foreach ($toApplyMigrations as $migration) {
            # code...
            if ($migration === '.' || $migration === '..') {
                # code...
                continue;
            }
            

            require_once Application::$ROOT_DIR.'/migrations/'.$migration;
             $className =  pathinfo($migration, PATHINFO_FILENAME);

             $instance = new $className;

             $this->log("Applying migration $migration");
             $instance->up();
             $this->log("Applied migration $migration");
             $newMigrations[]= $migration;

        }
        if (!empty($newMigrations)) {
            # code...
            $this->saveMigrations($newMigrations);
        }
        else {
            # code...
            $this->log("All migrations Applied ..");
        }

     }



     public function createMigrationsTable(){
         $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS migrations (
                id INT AUTO_INCREMENT PRIMARY KEY,
                migration VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;
         ");
     }



     public function getAppliedMigrations(){
         $statement = $this->pdo->prepare("SELECT migration from migrations");
         $statement->execute();

         return $statement->fetchAll((\PDO::FETCH_COLUMN));
     }


     public function saveMigrations(array $migrations){

        $str = implode(",",array_map(fn($m) => "('$m')", $migrations)) ;


        $statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES
            $str
        ");

        $statement->execute();

     }


     protected function log($message){
         echo '['.date('Y-m-d H:i:s').'] - '.$message.PHP_EOL;
     }

     public function prepare($sql): \PDOStatement
     {
         return $this->pdo->prepare($sql);
     }

 }
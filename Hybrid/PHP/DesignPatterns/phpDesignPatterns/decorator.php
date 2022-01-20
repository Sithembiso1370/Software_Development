<?php
// Problem it solves

// Allows one to add more functionALITY to a class 


// eg
interface Logger {
    public function log($msg);
}

class FileLogger {
    public function log($msg){
        echo "<p>file : {$msg}</p>";
    }
}

class EmailLogger {
    public function log($msg){
        echo "<p>email : {$msg}</p>";
    }
}

$log = new FileLogger();
$log->log("Logging to a new file ...");